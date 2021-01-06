<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\SocialLink;
use App\Models\Website;
use App\Models\WebsiteSetting;
use App\Models\WebsiteUser;
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
            $website_setting = WebsiteSetting::where('website_id',$this->getWebsite())->first();
            $social_link = SocialLink::where('website_id', $this->getWebsite())->first();
//            dd($social_link);
            $view->with(compact('website_setting','social_link'));
        });
    }

    public function getWebsite()
    {
        $user = auth()->id();
        $website = WebsiteUser::where('user_id',$user)->first();
        return $website->website_id;
    }

}
