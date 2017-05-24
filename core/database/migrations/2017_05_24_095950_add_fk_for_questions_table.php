<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkForQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('data_type_id')->references('uuid')->on('data_types')->onDelete('cascade');
            $table->foreign('control_type_id')->references('uuid')->on('control_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            //$table->dropForeign('data_type_id_foreign');
            //$table->dropForeign('control_type_id_foreign');
        });
    }
}
