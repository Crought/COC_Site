<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ScenarioTableSeeder extends Seeder
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
            DB::table('scenarios')->insert([
                'title' => $faker->realText(20),
                'description' => $faker->realText(200),
                'player_number' => rand(1, 5),
                'playing_time' => rand(0, 12),
                'keeper_technique' => rand(0, 5),
                'player_technique' => rand(0, 5),
                'scenario_tag_id' => rand(1, 50),
                'scenario' => $faker->realText(500),
                'contributor' => $faker->name,
                'share_cnt' => rand(0, 100),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);

            gc_collect_cycles();  //メモリ解放
        }

    }
}
