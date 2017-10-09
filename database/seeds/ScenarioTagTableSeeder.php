<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ScenarioTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0;$i<50;$i++){
            $faker = Faker::create('ja_JP');
            DB::table('scenario_tags')->insert([
                'name' => $faker->realText(10),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
