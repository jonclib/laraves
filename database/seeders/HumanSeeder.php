<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('humans')->insert([
    		'first_name' => Str::random(10),
    		'last_name' => Str::random(10),
    		'email' => Str::random(10).'@gmail.com'    		
    	]);
    }
}
