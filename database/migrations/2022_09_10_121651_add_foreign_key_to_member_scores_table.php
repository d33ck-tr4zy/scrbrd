<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToMemberScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('member_scores', function (Blueprint $table) {
            $table->foreign('member_id')->references('id')->on('members')->cascadeOnDelete();
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
        Schema::table('member_scores', function (Blueprint $table) {
            //
        });
    }
}
