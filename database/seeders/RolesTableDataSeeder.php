<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Support\Str;
use DB;
use Illuminate\Database\Seeder;

class RolesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name'   =>  'HOD',
                
            ],[
                'name'   =>  'Staff',
               
            ]
            ]);
    }
}
