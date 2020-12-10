<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Theme;
use App\Models\Website;
use App\Models\WebsiteUser;
use App\Models\Widget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class PageController extends Controller
{

    private $url_name;
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

    public function getWebsite()
    {
        $user = auth()->id();
        $website = WebsiteUser::where('user_id',$user)->first();
        return $website->website_id;
    }

    public function index()
    {
        $route = Config::get('THEME_PAGES').'welcome';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }

    public function about()
    {
        $page = 'about';
        $route = Config::get('THEME_PAGES').$page;
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }

    public function services()
    {
        $page ='services';
        $route = Config::get('THEME_PAGES').$page;
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();

        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }

    public function contact()
    {
        $page ='contact';
        $route = Config::get('THEME_PAGES').$page;
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }

    public function blog()
    {
        $page ='blog';
        $route = Config::get('THEME_PAGES').$page;
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));    }

    public function gallery()
    {
        $page ='gallery';
        $route = Config::get('THEME_PAGES').$page;
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }

    public function volunteer()
    {
        $page ='volunteer';
        $route = Config::get('THEME_PAGES').$page;
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function shop()
    {
        $page ='shop';
        $route = Config::get('THEME_PAGES').$page;
       $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));

    }
    public function product_detail()
    {
        $page ='product_details';
        $route = Config::get('THEME_PAGES').$page;
       $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }

    public function donate()
    {
        $page ='donate';
        $route = Config::get('THEME_PAGES').$page;
       $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function cause()
    {
        $page ='cause';
        $route = Config::get('THEME_PAGES').$page;
       $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function campaign_detail()
    {
        $route = Config::get('THEME_PAGES').'campaign_detail';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function campaign()
    {
        $route = Config::get('THEME_PAGES').'campaign';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function biography()
    {
        $route = Config::get('THEME_PAGES').'biography';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function team()
    {
        $route = Config::get('THEME_PAGES').'team';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function event()
    {
        $route = Config::get('THEME_PAGES').'event';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function government()
    {
        $route = Config::get('THEME_PAGES').'government';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function health()
    {
        $route = Config::get('THEME_PAGES').'health';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function mayor()
    {
        $route = Config::get('THEME_PAGES').'mayor';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function resident()
    {
        $route = Config::get('THEME_PAGES').'resident';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function resident_detail()
    {
        $route = Config::get('THEME_PAGES').'resident_detail';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function branches()
    {
        $route = Config::get('THEME_PAGES').'branches';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function volunteer_detail()
    {
        $route = Config::get('THEME_PAGES').'volunteer_detail';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function mission_vision()
    {
        $route = Config::get('THEME_PAGES').'mission_vision';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function priorities()
    {
        $route = Config::get('THEME_PAGES').'priorities';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function faq()
    {
        $route = Config::get('THEME_PAGES').'faq';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function events_details()
{
    $route = Config::get('THEME_PAGES').'events_details';
    $url_name = Route::current()->getName();
    $page_name = Route::current()->getName();
     $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
    $web = $this->getWebsite();
    $widgets = Widget::where('website_id',$web)->get();
    return view($route,compact('widgets','page_id','page_name'));
}
    public function issue()
    {
        $route = Config::get('THEME_PAGES').'issue';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
         $page_id = Page::where('slug',$url_name)->where('theme_id',$this->getActiveTheme())->first();
        $web = $this->getWebsite();
        $widgets = Widget::where('website_id',$web)->get();
        return view($route,compact('widgets','page_id','page_name'));
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
