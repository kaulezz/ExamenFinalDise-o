<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class CandidateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $faker = Faker::create();
        for($i=0; $i < 10 ;$i++){
            DB::table('candidates')->insert([
                'name' => $faker->name,
                'lastname'=> $faker->lastname,
            ]);
        }
        
    }
}
