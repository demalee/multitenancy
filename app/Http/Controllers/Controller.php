<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\Theme;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Config;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function setupLayout()
    {
        $route = Config::get('THEME_LAYOUTS').'apps';
        $menu_items = MenuItem::where('name','Main Menu')->get();
        return view($route,compact('menu_items'));
    }

}
