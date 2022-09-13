<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoreWeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_weights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('score_type_id');
            $table->integer('year');
            $table->integer('month');
            $table->integer('weight');
            $table->timestamps();

            $table->foreign('score_type_id')->references('id')->on('score_types')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score_weights');
    }
}
