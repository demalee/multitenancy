<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Theme;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //
        $route = Config::get('THEME_LAYOUTS').'header';
        $this->navigationComposer($route);
    }

    /**
     * @param string $route
     */
    private function navigationComposer(string $route): void
    {
        view()->composer($route, function ($view) {
            $theme_id =  Config::get('THEME_ID');
//            dd($theme_id);
            $menu = Menu::where('name','Main Menu')->where('theme_id',$theme_id)->first();
            $menu_items = [];
            $main_menu_items_count = 0;
            if ($menu)
            {
                $menu_items = MenuItem::where('menu_id',$menu->id)->get();
                $main_menu_items_count = MenuItem::where('menu_id',$menu->id)->count();
            }

            $view->with(compact('menu_items','main_menu_items_count'));
        });
    }


}
