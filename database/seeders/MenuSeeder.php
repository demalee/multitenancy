<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Theme;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menu_items')->truncate();
        DB::table('menus')->truncate();
        $themes = Theme::all();
        foreach ($themes as $theme)
        {
            Menu::create(
                [
                    'name'=>"Main Menu",
                    'slug'=>'main-menu',
                    'theme_id'=>$theme->id,
                    'status_active'=>1,
                    'parent_menu'=>0
                ]
            );
        }

        foreach ($themes as $theme)
        {
            Menu::create(
                [
                    'name'=>"Bottom Menu",
                    'slug'=>'bottom-menu',
                    'theme_id'=>$theme->id,
                    'status_active'=>1,
                    'parent_menu'=>0
                ]
            );
        }


    }
}
