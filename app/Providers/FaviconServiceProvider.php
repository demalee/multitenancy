<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\SocialLink;
use App\Models\Website;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class FaviconServiceProvider extends ServiceProvider
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
        $route = Config::get('THEME_LAYOUTS').'app';
        $this->navigationComposer($route);
    }

    private function navigationComposer(string $route): void
    {
        view()->composer($route, function ($view) {
            $website = Website::where('admin_id',auth()->id())->first();
            $website_setting = WebsiteSetting::where('website_id',@$website->id)->first();
            $social_link = SocialLink::where('website_id', @$website->id)->first();
//            dd($social_link);
            $view->with(compact('website_setting','social_link'));
        });
    }

}
