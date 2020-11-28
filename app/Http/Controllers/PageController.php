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

    public function index()
    {
        $route = Config::get('THEME_PAGES').'welcome';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
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
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }

    public function contact()
    {
    $route = Config::get('THEME_PAGES').'contact';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }

    public function blog()
    {
        $route = Config::get('THEME_PAGES').'blog';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));    }

    public function gallery()
    {
        $route = Config::get('THEME_PAGES').'gallery';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }

    public function volunteer()
    {
        $route = Config::get('THEME_PAGES').'volunteer';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route);
    }
    public function shop()
    {
        $route = Config::get('THEME_PAGES').'shop';
        $route = Config::get('THEME_PAGES').'product_detail';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));

return view($route);
    }
    public function product_detail()
    {
        $route = Config::get('THEME_PAGES').'product_detail';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function donate()
    {
        $route = Config::get('THEME_PAGES').'donate';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function cause()
    {
        $route = Config::get('THEME_PAGES').'cause';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function campaign_detail()
    {
        $route = Config::get('THEME_PAGES').'campaign_detail';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function campaign()
    {
        $route = Config::get('THEME_PAGES').'campaign';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function biography()
    {
        $route = Config::get('THEME_PAGES').'biography';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function team()
    {
        $route = Config::get('THEME_PAGES').'team';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route);
    }
    public function event()
    {
        $route = Config::get('THEME_PAGES').'event';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function government()
    {
        $route = Config::get('THEME_PAGES').'government';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function health()
    {
        $route = Config::get('THEME_PAGES').'health';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function mayor()
    {
        $route = Config::get('THEME_PAGES').'mayor';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function resident()
    {
        $route = Config::get('THEME_PAGES').'resident';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function resident_detail()
    {
        $route = Config::get('THEME_PAGES').'resident_detail';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function branches()
    {
        $route = Config::get('THEME_PAGES').'branches';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function volunteer_detail()
    {
        $route = Config::get('THEME_PAGES').'volunteer_detail';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function mission_vision()
    {
        $route = Config::get('THEME_PAGES').'mission_vision';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function priorities()
    {
        $route = Config::get('THEME_PAGES').'priorities';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    }
    public function faq()
    {
        $route = Config::get('THEME_PAGES').'faq';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
        return view($route,compact('widgets','page_id','page_name'));
    } public function events_details()
{
    $route = Config::get('THEME_PAGES').'events_details';
    $url_name = Route::current()->getName();
    $page_name = Route::current()->getName();
    $page_id = Page::where('slug',$url_name)->first();
    $web = Website::where('admin_id',auth()->id())->first();
    $widgets = Widget::where('website_id',$web->id)->get();
    return view($route,compact('widgets','page_id','page_name'));
}
    public function issue()
    {
        $route = Config::get('THEME_PAGES').'issue';
        $url_name = Route::current()->getName();
        $page_name = Route::current()->getName();
        $page_id = Page::where('slug',$url_name)->first();
        $web = Website::where('admin_id',auth()->id())->first();
        $widgets = Widget::where('website_id',$web->id)->get();
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
