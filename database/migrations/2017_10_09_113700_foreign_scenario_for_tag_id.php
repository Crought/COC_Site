<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignScenarioForTagId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scenarios', function (Blueprint $table) {
            $table->foreign('scenario_tag_id')->references('id')->on('scenario_tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scenarios', function (Blueprint $table) {
            $table->dropForeign(['scenario_tag_id']);
        });
    }
}
