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

        foreach ($themes as $theme)
        {
            Page::create(
                [
                    'title'=>'Events',
                    'slug'=>'events',
                    'page_description'=>'Events',
                    'content'=>'Events for the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }
        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Blog',
                    'slug'=>'blog',
                    'page_description'=>'Blog',
                    'content'=>'Blog about the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }
        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Events detail',
                    'slug'=>'events_details',
                    'page_description'=>'Details of an event',
                    'content'=>'Details of an event',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'gallery',
                    'slug'=>'gallery',
                    'page_description'=>'Our media',
                    'content'=>'Media gallery',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }
        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Volunteer',
                    'slug'=>'volunteer',
                    'page_description'=>'Volunteers of the county',
                    'content'=>'Volunteers of the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Branches',
                    'slug'=>'branches',
                    'page_description'=>'Branches of the county',
                    'content'=>'Branches of the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }
        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'cause',
                    'slug'=>'cause',
                    'page_description'=>'Causes',
                    'content'=>'causes',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }
        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Shop',
                    'slug'=>'shop',
                    'page_description'=>'shop for the county',
                    'content'=>'shop for  the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'product details',
                    'slug'=>'product_detail',
                    'page_description'=>'Product information',
                    'content'=>'product information',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }
        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Campaign',
                    'slug'=>'campaign',
                    'page_description'=>'Campaigns of the county',
                    'content'=>'Campaign of the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'County donation',
                    'slug'=>'donate',
                    'page_description'=>'donations for  the county',
                    'content'=>'donations of the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }


        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Biography',
                    'slug'=>'biography',
                    'page_description'=>' Biography ',
                    'content'=>'Biography',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }




        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Campaign Details',
                    'slug'=>'campaign_detail',
                    'page_description'=>'Details of the campaign',
                    'content'=>'Campaigns',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Team',
                    'slug'=>'team',
                    'page_description'=>'team of the county',
                    'content'=>'team  of the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'event',
                    'slug'=>'event',
                    'page_description'=>'Events of the county',
                    'content'=>'Events of the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }
        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Residential',
                    'slug'=>'resident',
                    'page_description'=>'residents of the county',
                    'content'=>'Residents of the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }



        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Government',
                    'slug'=>'government',
                    'page_description'=>'County government',
                    'content'=>'County government',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Health',
                    'slug'=>'health',
                    'page_description'=>'Couty Health information',
                    'content'=>'Health',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Mayor',
                    'slug'=>'mayor',
                    'page_description'=>'County Governor',
                    'content'=>'Governor of the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Resident detail',
                    'slug'=>'resident_detail',
                    'page_description'=>'Resident details  of the county',
                    'content'=>'Volunteers of the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }
        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Priorities',
                    'slug'=>'priorities',
                    'page_description'=>'Priorities',
                    'content'=>'Priorities',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Faqs',
                    'slug'=>'faq',
                    'page_description'=>'Faqs for the county',
                    'content'=>'Faqs',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'Issue',
                    'slug'=>'issue',
                    'page_description'=>'Issues of the county',
                    'content'=>'Issues of the county',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }

        foreach ($themes as $theme)

        {
            Page::create(
                [
                    'title'=>'events details',
                    'slug'=>'events_details',
                    'page_description'=>'Details of events',
                    'content'=>'Details of the county events',
                    'theme_id'=>$theme->id,
                    'parent_page'=>0
                ]
            );
        }
    }
}
