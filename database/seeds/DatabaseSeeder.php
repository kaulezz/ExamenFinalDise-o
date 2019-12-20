<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   $this->truncateTables([
        'candidates',
        'electors',
        'cabins',
    ]);
         $this->call(CandidateTableSeeder::class);
         $this->call(ElectorTableSeeder::class);
         $this->call(CabinsTableSeeder::class);
         $this->call(VotosTableSeeder::class);
    }

    protected function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
            foreach($tables as $table){
                DB::table($table)->truncate();  
            }
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

}
