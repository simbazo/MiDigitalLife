<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkForAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->foreign('event_id')->references('uuid')->on('events')->onDelete('cascade');
            $table->foreign('question_id')->references('uuid')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answers', function (Blueprint $table) {
            //$table->dropForeign('event_id_foreign');
            //$table->dropForeign('question_id_foreign');
        });
    }
}
