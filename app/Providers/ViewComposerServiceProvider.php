<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\SocialLink;
use App\Models\Theme;
use App\Models\Website;
use App\Models\WebsiteSetting;
use App\Models\WebsiteUser;
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
            $menu = Menu::where('name','Main Menu')->where('theme_id',$theme_id)->first();
            $menu_items = [];
            $website = Website::where('admin_id',auth()->id())->first();
            $website_setting = WebsiteSetting::where('website_id',$this->getWebsite())->first();
//            dd($website_setting);
//            dd($website_setting);
            $social_link = SocialLink::where('website_id', $this->getWebsite())->first();
            $main_menu_items_count = 0;
            if ($menu)
            {
                $menu_items = MenuItem::where('menu_id',$menu->id)->orderby('menu_position','asc')->get();

                $main_menu_items_count = MenuItem::where('menu_id',$menu->id)->count();
            }

            $view->with(compact('menu_items','main_menu_items_count','website_setting','social_link'));
        });
    }

    public function getWebsite()
    {
        $user = auth()->id();
        $website = WebsiteUser::where('user_id',$user)->first();
        return @$website->website_id;
    }


}
