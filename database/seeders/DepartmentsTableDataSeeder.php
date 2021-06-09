<?php

namespace Database\Seeders;
use App\Models\Department;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class DepartmentsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
	    	Department::create([
	            'name' => str_random(8),
	           
	        ]);
    	}
    }
}
