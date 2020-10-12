<?php

namespace App\Providers;

use App\Models\Theme;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $theme_name = "default";
        $theme_info = Theme::all();

        foreach ($theme_info as $theme)
        {
            if ($theme->status_active == 1)
            {
                $theme_name = $theme->name;
                break;
            }
        }
        View::share("THEME_NAME",$theme_name);
        $theme_directories = array("layouts","pages","about","services","contact","blog");
        $theme_assets_directories = array("css","font","images","js","videos","img","assets");

        //views directory
        foreach ($theme_directories as $theme_directory)
        {
            $theme_u_dir = "THEME_".strtoupper($theme_directory);
            $blade_path = "theme.".$theme_name.".".$theme_directory.".";
            $default_blade_path = "theme.default.".$theme_directory.".";

            $path = resource_path("views/theme/".$theme_name."/".$theme_directory);
            #echo "PATH: ".$path."<br>";
            if(file_exists($path) && is_dir($path))
            {
                View::share($theme_u_dir, $blade_path);
                Config::set($theme_u_dir , $blade_path);
            }
            else
            {
                View::share($theme_u_dir, $default_blade_path);
                Config::set($theme_u_dir , $default_blade_path);
            }

        }

        //assets directory
        foreach ($theme_assets_directories as $assets_directory)
        {
            $theme_a_dir = "THEME_".strtoupper($assets_directory);
            $asset_path = "theme/".$theme_name."/".$assets_directory."/";
            $default_asset_path = "theme/default/".$assets_directory."/";

            $path = public_path("theme/".$theme_name."/".$assets_directory);
            #echo "PATH: ".$path."<br>";
            if(file_exists($path) && is_dir($path))
            {
                View::share($theme_a_dir, $asset_path);
                Config::set($theme_a_dir , $asset_path);
            }
            else
            {
                View::share($theme_a_dir, $default_asset_path);
                Config::set($theme_a_dir , $default_asset_path);
            }

        }
    }
}
