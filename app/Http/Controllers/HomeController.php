<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\PageWidgets;
use App\Models\Theme;
use App\Models\Website;
use App\Models\Widget;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function pages()
    {
        $theme = Theme::where('status_active',1)->first();
        if ($theme)
        {
            $themeid = $theme->id;
        }
        else
        {
            $themeid  = 1;
        }
        $pages = Page::where('theme_id',$themeid)->get();
        return view('dashboard/pages/index',compact('pages'));
    }

    public function editWidgets($id)
    {
        $page_wid = PageWidgets::where('page_id',$id)->get();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
//        $pages = Page::where('theme_id',$this->theme_id)->get();
        return view('dashboard/widgets_edit', compact('widgets','page_wid','id'));
    }
    public function steps()
    {
        $themes = Theme::all();

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
        $menu = Menu::where('name','Main menu')->where('theme_id',$theme_id)->get();
        $widgets = Widget::where('website_id',0)->get();
        return view('dashboard/website/steps',compact('pages','themes','widgets'));
    }
}
