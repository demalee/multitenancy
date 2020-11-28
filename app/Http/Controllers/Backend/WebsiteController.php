<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\PageWidgets;
use App\Models\Theme;
use App\Models\Website;
use App\Models\WebsiteSetting;
use App\Models\Widget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function websiteSettingsUpdate(Request $request, $id)
    {
        $data = $request->all();
        $setting = WebsiteSetting::findorfail($id);
        //favicon
        if (isset($data['favicon']))
        {
            $attach = time() . '-favicon.' . request()->favicon->getClientOriginalExtension();
            request()->favicon->move(public_path('images'), $attach);
            $favicon_url = env('APP_URL')."/images/".$attach;
            $data['favicon'] = $attach;
        }

        //brand color
        if (isset($data['logo_name']))
        {
            $attach1 = time(). '-logo.' . request()->logo_name->getClientOriginalExtension();
            request()->logo_name->move(public_path('images'), $attach1);
            $logo_url = env('APP_URL')."/images/".$attach1;
            $data['logo_name'] = $attach1;
        }
        $website_settings = $setting->update(
            [
                'favicon'=>@$data['favicon'],
                'brand_name'=>@$data['brand_name'],
                'brand_color'=>@$data['brand_color'],
                'logo_name'=>@$data['logo_name'],
            ]);
        if ($website_settings)
        {
            return back()->with('success','website settings successfully set');
        }
        else
        {
            return back()->with('error','Error occurred, something went wrong');
        }
    }

    public function websiteSettings(Request $request)
    {
        $data = $request->all();
        $admin = auth()->id();
        $website = Website::where('admin_id',$admin)->first();

        //favicon
        if (isset($data['favicon']))
        {
            $attach = time() . '-favicon.' . request()->favicon->getClientOriginalExtension();
            request()->favicon->move(public_path('images'), $attach);
            $favicon_url = env('APP_URL')."/images/".$attach;
            $data['favicon'] = $attach;
        }

        //brand color
        if (isset($data['logo_name']))
        {
            $attach1 = time(). '-logo.' . request()->logo_name->getClientOriginalExtension();
            request()->logo_name->move(public_path('images'), $attach1);
            $logo_url = env('APP_URL')."/images/".$attach1;
            $data['logo_name'] = $attach1;
        }
        $website_settings = WebsiteSetting::updateorcreate(
            [
                'website_id'=>@$website->id
            ],
            [
                'favicon'=>@$data['favicon'],
                'brand_name'=>@$data['brand_name'],
                'brand_color'=>@$data['brand_color'],
                'logo_name'=>@$data['logo_name'],
            ]);
        if ($website_settings)
        {
            return back()->with('success','website settings successfully set');
        }
        else
        {
            return back()->with('error','Error occurred, something went wrong');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //

        $data = $request->all();
//dd($data);
        $validate = Validator::make($data, [
            'f1-first-name' => 'required|unique:websites,name',
            'description' => 'required',
        ]);

        if ($validate->fails()) {
            return back()->with('error','Error occurred, website name must be unique');
        }
        else {


            $website = Website::where('admin_id', auth()->id())->first();
//            dd($website);

            if ($website) {
                $website->update([
                    'name' => $data['f1-first-name'],
                    'description' => $data['description'],
                    'theme_id' => $data['radio1'],
                    'menu_id' => 0,
                ]);
            } else {
                $website = Website::updateorcreate([
                        'name' => $data['f1-first-name'],
                        'admin_id' => auth()->id()
                    ],[
                        'theme_id' => $data['radio1'],
                        'description' => $data['description'],
                        'menu_id' => 0,
                ]);
            }

            if ($website) {
                if (isset($data['radio1'])) {
                    $themes = Theme::all();
                    foreach ($themes as $th) {
                        if ($th->id == $data['radio1']) {
                            $th->update([
                                'status_active' => 1
                            ]);
                        } else {
                            $th->update([
                                'status_active' => 0
                            ]);
                        }

                    }
                } else {
                    $th = Theme::findorfail(1)->update([
                        'status_active' => 1
                    ]);
                }

                if (isset($data['page_id'])) {
                    $count = 0;
                    $menu = Menu::where('name', 'Main Menu')->where('theme_id', self::getActiveTheme())->first();

                    DB::table('menu_items')->where('menu_id', @$menu->id)->delete();
                    //widgets
                    $widgets = Widget::where('website_id',0)->get();
                    foreach ($widgets as $widget)
                    {
                        Widget::create([
                            'name'=>$widget->name,
                            'widget_parent'=>0,
                            'status_active'=>0,
                            'position'=>0,
                            'widget_level'=>0,
                            'website_id'=>$website->id
                        ]);
                    }


                    foreach ($data['page_id'] as $page_id) {
                        if ($page_id == null)
                        {
                            continue;
                        }
//                        $pages = Page::where('slug',$page_id)->first();
                        $menu_item = MenuItem::updateorcreate([
                            'menu_id' => @$menu->id,
                            'page_id' => @$page_id,
                            'theme_id'=>$this->getActiveTheme()
                        ], [
                            'menu' => @$menu->name,
                            'parent_id' => 0,
                            'slug' => \Illuminate\Support\Str::slug(@$menu->name)
                        ]);

                        foreach ($data['widget_item'] as $item) {
                            $selected_widget = Widget::where('name',$item)->where('website_id',$website->id)->first();
                            $pageWidgets = PageWidgets::create([
                                'page_id' => $page_id,
                                'widget_id' => $selected_widget->id,
                            ]);

                            $widget_update = Widget::findorfail( $selected_widget->id)->update(['status_active'=>1]);

                        }
                    }

                    //favicon
                    if (isset($data['favicon']))
                    {
                        $attach = time() . '-favicon.' . request()->favicon->getClientOriginalExtension();
                        request()->favicon->move(public_path('images'), $attach);
                        $favicon_url = env('APP_URL')."/images/".$attach;
                        $data['favicon'] = $attach;
                    }

                    //brand color
                    if (isset($data['logo_name']))
                    {
                        $attach1 = time(). '-logo.' . request()->logo_name->getClientOriginalExtension();
                        request()->logo_name->move(public_path('images'), $attach1);
                        $logo_url = env('APP_URL')."/images/".$attach1;
                        $data['logo_name'] = $attach1;
                    }
                    $website_settings = WebsiteSetting::updateorcreate(
                        [
                            'website_id'=>$website->id
                        ],
                        [
                            'favicon'=>@$data['favicon'],
                            'brand_name'=>@$data['brand_name'],
                            'brand_color'=>@$data['brand_color'],
                            'logo_name'=>@$data['logo_name'],
                        ]);




                        return redirect('/home');

                }
            }
        }
    }

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        //
    }
}
