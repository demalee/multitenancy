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
use Illuminate\Support\Str;

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
        $route = Config::get('THEME_LAYOUTS').'apps';
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
        if (auth()->user())
        {
            $user = auth()->id();
            $web = WebsiteUser::where('user_id',$user)->first();
            $website = Website::where('id', $web->website_id)->first();
        }
        else
        {
            $app_url = env('APP_URL');
//        $app_url = request()->root();
            if (Str::startsWith($app_url, 'http://'))
            {
                $domain = substr ($app_url, 7); // $domain is now 'www.example.com'
            }
            elseif (Str::startsWith($app_url,'https://'))
            {
                $domain = substr ($app_url, 8); // $domain is now 'www.example.com'
            }

            $website = Website::where('name',$domain)->first();
        }

        return @$website->id;
    }

}
