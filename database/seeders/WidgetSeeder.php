<?php

namespace Database\Seeders;

use App\Models\Widget;
use Illuminate\Console\Command;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WidgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('widget_contents')->truncate();
        DB::table('widgets')->truncate();
        $websites = DB::table('websites')->get();
        $names = ["Slider", "Banner",
            "Bread Crumbs","Info","Department","Authority", "Gallery","Post","Projects","Events","Testimonials","Publications", "News",];
       foreach ($websites as $website)
       {
           foreach ($names as $name)
           {
               Widget::create([
                   'name'=>$name,
                   'widget_parent'=>0,
                   'status_active'=>0,
                   'position'=>0,
                   'widget_level'=>0,
                   'website_id'=>$website->id
               ]);
           }
       }

        foreach ($names as $name)
        {
            Widget::create([
                'name'=>$name,
                'widget_parent'=>0,
                'status_active'=>0,
                'position'=>0,
                'widget_level'=>0,
                'website_id'=>0
            ]);
        }

    }
}
