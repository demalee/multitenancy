<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageWidgets;
use App\Models\SocialLink;
use App\Models\Theme;
use App\Models\ThemeWidget;
use App\Models\Website;
use App\Models\WebsiteWidget;
use App\Models\Widget;
use App\Models\WidgetContent;
use Illuminate\Http\Request;

class WidgetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $theme_id;

    public function __construct()
    {
        $theme = new Theme;
        $this->theme_id = $theme->getActiveTheme();
    }


    public function index()
    {
        //
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view('dashboard.widgets', compact('widgets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        $pages = Page::where('theme_id',$this->theme_id)->get();
        return view('/dashboard/createwidgets', compact('widgets','pages'));
    }

    public function content(Widget $widget)
    {
        $contents = \App\Models\WidgetContent::where('widget_id', $widget->id)->get();
        return view('/dashboard/content', compact('contents', 'widget'));
    }

    public function addSocialLinks(Request $request)
    {
        $data = $request->all();
        $social = SocialLink::updateorcreate([
            'website_id'=>$this->getWebsite()
        ],[
            'facebook'=>$data['facebook'],
            'instagram'=>$data['instagram'],
            'skype'=>$data['skype'],
            'twitter'=>$data['twitter'],
            'youtube'=>$data['youtube'],
            'linkedin'=>$data['linkedin'],
        ]);

        return back()->with('success','Successfully added social links');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        if ($data['submit'] == 'store_widget') {
            $widget = Widget::create([
                'name' => $data['name'],
                'theme_id' => $this->theme_id,
                'widget_parent' => 1,
                'status_active' => 0,
                'position' => 0,
                'widget_level' => 2,
            ]);

            if ($widget) {
                return back()->with('success', 'successfully created widget');
            }
        } elseif ($data['submit'] == 'activate_widgets') {

            $page_id = $data['page_id'];

            foreach ($data['widget_item'] as $item) {
                $pageWidgets = PageWidgets::create([
                    'page_id'=>$data['page_id'],
                    'widget_id'=>$item,
                ]);

                $widget_update = Widget::findorfail($item)->update(['status_active'=>1]);
            }

            return back()->with('success','successfully added widgets to page');
        }
        elseif ($data['submit'] == 'activate_edit_widgets') {

            $page_id = $data['page_id'];

            PageWidgets::where('page_id',$data['page_id'])->delete();
            foreach ($data['widget_item'] as $item) {
                $pageWidgets = PageWidgets::create([
                    'page_id'=>$data['page_id'],
                    'widget_id'=>$item,
                ]);

                $widget_update = Widget::findorfail($item)->update(['status_active'=>1]);
            }

            return back()->with('success','successfully added widgets to page');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Widget $widget)
    {
        //
        return view('dashboard.widgets.show', compact('widget'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Widget $widget)
    {
        //
        return view('dashboard.widgets.edit', compact('widget'));
    }

    public function addWidget(Request $request)
    {
        $data = $request->all();
        if (isset($data['content_file'])) {
            $attach1 = time() . '-content_file.' . request()->content_file->getClientOriginalExtension();
            request()->content_file->move(public_path('images'), $attach1);
            $logo_url = env('APP_URL') . "/images/" . $attach1;
            $data['content_file'] = $attach1;
        }
        $content = WidgetContent::create([
            'title' => @$data['title'],
            'description' => @$data['description'],
            'source_link' => @$data['source_url'],
            'content_image' => @$data['content_file'],
            'widget_id' => $data['widget_id'],
        ]);

        return back()->with('success', 'successfully added content');
    }


    public function update(Request $request, $id)
    {
        //

        $data = $request->all();
        if ($data['submit'] == 'update_widget') {
            $widget = Widget::findorfail($id);
            $widget->update([
                'name' => $data['name'],
                'theme_id' => $this->theme_id,
                'widget_parent' => 1,
                'status_active' => 0,
                'position' => 0,
                'widget_level' => 2,
            ]);
            return back()->with('success', 'successfully updated widget');
        } elseif ($data['submit'] == 'widget_content') {
            $auth_id = auth()->id();
            $website_id = Website::where('admin_id', $auth_id)->first();
            $widget = Widget::findorfail($id);
            if (isset($data['content_file'])) {
                $attach1 = time() . '-content_file.' . request()->content_file->getClientOriginalExtension();
                request()->content_file->move(public_path('images'), $attach1);
                $logo_url = env('APP_URL') . "/images/" . $attach1;
                $data['content_file'] = $attach1;
            }
            $content = WidgetContent::create([
                'title' => @$data['title'],
                'description' => @$data['description'],
                'source_link' => @$data['source_url'],
                'content_image' => @$data['content_file'],
                'widget_id' => $id,
            ]);

            return back()->with('success', 'successfully added content');
        } elseif ($data['submit'] == 'edit_widget_content') {
            $content = WidgetContent::findorfail($id);
            if (isset($data['content_file'])) {
                $attach1 = time() . '-content_file.' . request()->content_file->getClientOriginalExtension();
                request()->content_file->move(public_path('images'), $attach1);
                $logo_url = env('APP_URL') . "/images/" . $attach1;
                $data['content_file'] = $attach1;
            }
            $content->update([
                'title' => @$data['title'],
                'description' => @$data['description'],
                'source_link' => @$data['source_url'],
                'content_image' => @$data['content_file']
            ]);

            return back()->with('success', 'successfully added content');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //
        $data = \request()->all();
        if ($data['submit'] == 'delete_content') {
            $content = WidgetContent::findorfail($id);
            $content->delete();
        } else {
//            $widget->delete();
        }

        return back()->with('success', 'successfully deleted');
    }

    public function getWebsite()
    {
        $user_id = auth()->id();
        return Website::where('admin_id', $user_id)->first()->id;
    }


}
