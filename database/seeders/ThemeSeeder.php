<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('themes')->truncate();
        $data = array(
//            [
//                'id'=>1,
//                'name'=> 'default',
//                'slug'=>'default',
//                'theme_image'=>'farm.png',
//                'status_active'=>1
//            ],
            [
                'id'=>2,
                'name'=> 'netaji_theme',
                'slug'=>'netaji_theme',
                'theme_image'=>'mandera.JPG',
                'status_active'=>0
            ],
            [
                'id'=>3,
                'name'=> 'local_government_theme',
                'slug'=>'local_government_theme',
                'theme_image'=>'local_government.PNG',
                'status_active'=>0
            ],
//            [
//                'id'=>4,
//                'name'=> 'political_theme',
//                'slug'=>'political_theme',
//                'theme_image'=>'political.PNG',
//                'status_active'=>0
//            ],
//            [
//                'id'=>5,
//                'name'=> 'republic_theme',
//                'slug'=>'republic_theme',
//                'theme_image'=>'republic.PNG',
//                'status_active'=>0
//            ],
//            [
//            'id'=>6,
//            'name'=> 'country_political_theme',
//            'slug'=>'country_political_theme',
//            'theme_image'=>'country.PNG',
//            'status_active'=>0
//            ]
        );
        foreach ($data as $datum)
        {
            Theme::create(
                $datum
            );
        }

    }
}
