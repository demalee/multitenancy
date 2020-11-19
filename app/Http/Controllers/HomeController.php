<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Theme;
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
        return view('dashboard/website/steps',compact('pages','themes'));
    }
}
