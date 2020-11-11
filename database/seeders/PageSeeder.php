<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Theme;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pages')->truncate();
       $themes = Theme::all();
        foreach ($themes as $theme)
        {
            Page::create(
                [
                    'title'=>'Home',
                    'slug'=>'home',
                    'page_description'=>'home page',
                    'content'=>'home page content',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)
        {
            Page::create(
                [
                    'title'=>'Services',
                    'slug'=>'services',
                    'page_description'=>'services page',
                    'content'=>'services page content',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)
        {
            Page::create(
                [
                    'title'=>'About',
                    'slug'=>'about',
                    'page_description'=>'about us page',
                    'content'=>'about us page content',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)
        {
            Page::create(
                [
                    'title'=>'Contact',
                    'slug'=>'contact',
                    'page_description'=>'contact page',
                    'content'=>'contact page content',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }


    }
}
