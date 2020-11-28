<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Theme;
use App\Models\Website;
use App\Models\Widget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class PageController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
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
    public function index()
    {
        $route = Config::get('THEME_PAGES').'welcome';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }

    public function about()
    {
        $route = Config::get('THEME_PAGES').'about';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }

    public function services()
    {
        $route = Config::get('THEME_PAGES').'services';
        return view($route);
    }

    public function contact()
    {
    $route = Config::get('THEME_PAGES').'contact';
    return view($route);
    }

    public function blog()
    {
        $route = Config::get('THEME_PAGES').'blog';
        return view($route);
    }
    public function gallery()
    {
        $route = Config::get('THEME_PAGES').'gallery';
        return view($route);
    }
    public function volunteer()
    {
        $route = Config::get('THEME_PAGES').'volunteer';
        return view($route);
    }
    public function shop()
    {
        $route = Config::get('THEME_PAGES').'shop';
        return view($route);
    }
    public function product_detail()
    {
        $route = Config::get('THEME_PAGES').'product_detail';
        return view($route);
    }
    public function donate()
    {
        $route = Config::get('THEME_PAGES').'donate';
        return view($route);
    }
    public function cause()
    {
        $route = Config::get('THEME_PAGES').'cause';
        return view($route);
    }
    public function campaign_detail()
    {
        $route = Config::get('THEME_PAGES').'campaign_detail';
        return view($route);
    }
    public function campaign()
    {
        $route = Config::get('THEME_PAGES').'campaign';
        return view($route);
    }
    public function biography()
    {
        $route = Config::get('THEME_PAGES').'biography';
        return view($route);
    }
    public function team()
    {
        $route = Config::get('THEME_PAGES').'team';
        return view($route);
    }
    public function event()
    {
        $route = Config::get('THEME_PAGES').'event';
        return view($route);
    }
    public function government()
    {
        $route = Config::get('THEME_PAGES').'government';
        return view($route);
    }
    public function health()
    {
        $route = Config::get('THEME_PAGES').'health';
        return view($route);
    }
    public function mayor()
    {
        $route = Config::get('THEME_PAGES').'mayor';
        return view($route);
    }
    public function resident()
    {
        $route = Config::get('THEME_PAGES').'resident';
        return view($route);
    }
    public function resident_detail()
    {
        $route = Config::get('THEME_PAGES').'resident_detail';
        return view($route);
    }
    public function branches()
    {
        $route = Config::get('THEME_PAGES').'branches';
        return view($route);
    }
    public function volunteer_detail()
    {
        $route = Config::get('THEME_PAGES').'volunteer_detail';
        return view($route);
    }
    public function mission_vision()
    {
        $route = Config::get('THEME_PAGES').'mission_vision';
        return view($route);
    }
    public function priorities()
    {
        $route = Config::get('THEME_PAGES').'priorities';
        return view($route);
    }
    public function faq()
    {
        $route = Config::get('THEME_PAGES').'faq';
        return view($route);
    } public function events_details()
{
    $route = Config::get('THEME_PAGES').'events_details';
    return view($route);
}
    public function issue()
    {
        $route = Config::get('THEME_PAGES').'issue';
        return view($route);
    }
    //theme
    public function themeChange(Request $request,$id)
    {
        $data = $request->all();
        if ($data['submit'] == 'activate')
        {
            $themes = Theme::all();
            foreach ($themes as $th)
            {
                if ($th->id == $id)
                {
                    $th->update([
                        'status_active'=>1
                    ]);
                }
                else
                {
                    $th->update([
                        'status_active'=>0
                    ]);
                }

            }

            return back();
        }
        elseif ($data['submit'] == 'deactivate')
        {
            $themes = Theme::all();
            foreach ($themes as $th)
            {
                if ($th->id == $id)
                {
                    $th->update([
                        'status_active'=>0
                    ]);
                }
                else
                {
                    $th->update([
                        'status_active'=>0
                    ]);
                }


            }
            return back();
        }
    }
}
