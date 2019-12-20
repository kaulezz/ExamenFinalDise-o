<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

use App\Models\Cabin;
use App\Models\Candidate;

class VotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cabins = Cabin::select('id')->first();
        $candidates = Candidate::select('id')->first();
        $faker = Faker::create();
        for($i=0; $i < 10 ;$i++){
            DB::table('votos')->insert([
                'contador' => $faker->randomElement([644486,24442135,45541244]),
                'candidate_id'=> $candidates->id,
                'cabin_id'=> $cabins->id,
                'date'=>$faker->date('Y-m-d H:m:s'),
            ]);
        }
        
    }
    }

