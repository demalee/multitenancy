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
        //
        $theme_name = "default";
        $theme_name_request = "agriculture";
        $theme_info = Theme::all();
        $theme_info = array("default","agriculture");

        foreach ($theme_info as $theme)
        {
            if ($theme_name_request == $theme)
            {
                $theme_name = $theme_name_request;
                break;
            }
        }
        View::share("THEME_NAME",$theme_name);
        $theme_directories = array("","partials","layouts","includes","errors","pages");

        foreach ($theme_directories as $theme_directory)
        {
            $theme_u_dir = "THEME_".strtoupper($theme_directory);
            $blade_path = "Themes.".$theme_name.".".$theme_directory.".";
            $default_blade_path = "Themes.default.".$theme_directory.".";

            $path = resource_path("views/Themes/".$theme_name."/".$theme_directory);
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
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
