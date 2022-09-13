<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberDelayReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_delay_reasons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_delay_id');
            $table->unsignedBigInteger('delay_reason_id');
            $table->timestamps();

            $table->foreign('member_delay_id')->references('id')->on('member_delays')->cascadeOnDelete();
            $table->foreign('delay_reason_id')->references('id')->on('delay_reasons')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_delay_reason');
    }
}
