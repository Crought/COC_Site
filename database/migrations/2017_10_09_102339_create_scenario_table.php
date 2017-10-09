<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScenarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scenarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 20);
            $table->string('description', 200);
            $table->smallInteger('player_number');
            $table->decimal('playing_time', 4, 2);
            $table->smallInteger('keeper_technique');
            $table->smallInteger('player_technique');
            $table->unsignedInteger('scenario_tag_id');
            $table->text('scenario');
            $table->string('contributor', 50);
            $table->integer('share_cnt')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scenarios');
    }
}
