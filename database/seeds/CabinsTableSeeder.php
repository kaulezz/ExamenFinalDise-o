<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\Elector;

class CabinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $electors = Elector::select('id')->first();
        $faker = Faker::create();
        for($i=0; $i < 10 ;$i++){
            DB::table('cabins')->insert([
                'location' => $faker->randomElement(['lima','huancayo','arequipa']),
                'code' => $faker->randomElement([644486,24442135,45541244]),
                'id_elector'=> $electors->id,
            ]);
        }
        
    }
    }

