<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PageController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $route = Config::get('THEME_PAGES').'welcome';
        return view($route);
    }
    public function about()
    {
        $route = Config::get('THEME_PAGES').'about';

        return view($route);
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

    public function event()
    {
        $route = Config::get('THEME_PAGES').'events';
        return view($route);
    }

    public function eventDetail()
    {
        $route = Config::get('THEME_PAGES').'events-details';
        return view($route);
    }

    public function blog()
    {
        $route = Config::get('THEME_PAGES').'blog';
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
