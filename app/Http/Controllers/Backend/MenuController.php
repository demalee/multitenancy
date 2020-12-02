<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Psy\Util\Str;
use function GuzzleHttp\Promise\all;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getActiveTheme()
    {
        $theme = Theme::where('status_active',1)->first();
        if ($theme)
        {
            $theme_id = $theme->id;
        }
        else
        {
            $theme_id = 1;
        }
        return $theme_id;
    }

    public function index()
    {
        $menus = Menu::where('theme_id',self::getActiveTheme())->get();
        return view('/menu',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/dashboard/pages/createmenu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $validate = Validator::make($data,[
            'name'=>'required'
        ]);

        if ($validate->fails())
        {
            return back()->with('error','Error occurred, ');
        }
        else
        {
            $theme = Theme::where('status_active',1)->first();
            if ($theme)
            {
                $theme_id = $theme->id;
            }
            else
            {
                $theme_id = 1;
            }
            $menu = Menu::where('name',$data['name'])->where('theme_id',$theme_id)->first();

            if ($menu)
            {
                return redirect()->route('menus.index');
            }
           else
           {
               Menu::updateorcreate(
                   [
                       'name'=>$data['name'],
                       'theme_id'=>$theme_id
                   ],
                   [
                       'slug'=>\Illuminate\Support\Str::slug($data['name']),
                   ]);
               return redirect()->route('menus.index')->with('success');
           }


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
//        dd($menu);
        $theme = Theme::where('status_active',1)->first();
        if ($theme)
        {
            $theme_id = $theme->id;
        }
        else
        {
            $theme_id = 1;
        }
        $pages = Page::where('theme_id',$theme_id)->whereIn('page_level',[1,2])->get();
        $pages_sub = Page::where('theme_id',$theme_id)->where('page_level',3)->get();
        $menu_items = MenuItem::where('menu_id',$menu->id)->get();

        return view('/dashboard/pages/menus',compact('menu','pages','menu_items','pages_sub'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
//        dd($data);
        if ($data['submit'] == 'menu_edit') {
            $menu = Menu::findorfail($id);
            if (isset($data['name'])) {
                $menu->update([
                    'name' => $data['name']
                ]);
                return back()->with('success', 'successfully updated the menu');
            } else {
                return back()->with('info', 'nothing to edit');
            }

        } elseif ($data['submit'] == "edit_menu_items") {
//            dd($data['page_id']);
//            dd($this->getActiveTheme());
            $menu = Menu::findorfail($id);
            if (isset($data['page_id'])) {
                $count = 0;
                foreach ($data['page_id'] as $page_id) {
                    $menu_item = MenuItem::updateorcreate([
                        'page_id' => $page_id,
                        'theme_id' => $this->getActiveTheme()
                    ], [
                        'menu' => $menu->name,
                        'parent_id' => 0,
                        'slug' => \Illuminate\Support\Str::slug($menu->name),
                        'menu_level' => 1,
                        'menu_id' => $menu->id,
                    ]);
                }

                return back()->with('success', 'Successfully added menu item to the item');
            } else {
                return back()->with('info', 'no items to add to the menu');
            }

        } elseif ($data['submit'] == 'remove_menu_item') {
            $menu_item = MenuItem::findorfail($id);
            $menu_item->delete();
            return back()->with('success', 'successfully deleted the page from the menu');
        } elseif ($data['submit'] == "order_menus") {

//            dd($data);
            foreach ($data['menu_id'] as $menu_id)
            {
                $menu_items = MenuItem::where('id', $menu_id)->first()->update([
                    'menu_position' => $data['menu_item_' . $menu_id]
                ]);

            }
            return back()->with('success', 'Menu reordered successfully');
        } elseif ($data['submit'] == 'edit_sub_menu') {

            if (!isset($data['page_id'])) {
                return  back()->with('error','Error occurred, add pages to the menu');
            }
            $menu = Menu::findorfail($id);
            $page = Page::updateorcreate([
                'title'=>$data['sub_menu'],
                'theme_id'=>$menu->theme_id
            ],
                [
                'slug' => \Illuminate\Support\Str::slug($data['sub_menu']),
                'page_description' => $data['sub_menu'],
                'content' => $data['sub_menu'],
                'parent_page' => 1,
                'page_level' => 2
            ]);

            $menu_item = MenuItem::updateorcreate([
                'menu_id' => $menu->id,
                'page_id' => $page->id,
                'theme_id' => $this->getActiveTheme()
            ], [
                'menu' => $menu->name,
                'parent_id' => 0,
                'slug' => \Illuminate\Support\Str::slug($menu->name),
                'parent_page_id' => 0,
                'menu_level' => 2
            ]);

            if (isset($data['page_id'])) {

                $count = 0;
                foreach ($data['page_id'] as $page_id) {
                    $menu_item = MenuItem::updateorcreate([
                        'menu_id' => $menu->id,
                        'page_id' => $page_id,
                        'theme_id' => $this->getActiveTheme()
                    ], [
                        'menu' => $menu->name,
                        'parent_id' => 0,
                        'slug' => \Illuminate\Support\Str::slug($menu->name),
                        'parent_page_id' => $page->id,
                        'menu_level' => 3
                    ]);
                }

                return back()->with('success', 'Successfully added menu item to the item');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        if ($menu->parent_menu == 0)
        {
            return back()->with('info','Primary menus cannot be deleted');
        }
        else
        {
            $menu->delete();
            return back()->with('success','successfuly deleted the menu');
        }

    }
}
