<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scenarios')->delete();
        DB::table('scenario_tags')->delete();
        // $this->call(UsersTableSeeder::class);
        $this->call(ScenarioTagTableSeeder::class);
        $this->call(ScenarioTableSeeder::class);
    }
}
