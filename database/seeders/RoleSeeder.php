<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('roles')->truncate();
        $names = ['Administrator', 'Member'];

        foreach ($names as $datum)
        {
            $role  = Role::updateorcreate(
                ['name'=>$datum],
                [
                    'display_name'=>$datum,
                    'description'=>"description for role ".$datum
                ]
            );
        }

    }
}
