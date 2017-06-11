<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->string('uuid',36)->unique();
            $table->string('data_type_uuid')->nullable(false);
            $table->string('control_type_uuid')->nullable(false);
            $table->string('question')->nullable(false);
            $table->string('description')->nullable();
            $table->string('user_created')->nullable();
            $table->string('user_updated')->nullable();
            $table->string('user_deleted')->nullable();
            $table->softDeletes();
            $table->timestamps();
            
            //$table->foreign('data_type_uuid')->references('uuid')->on('data_types')->onDelete('cascade');
            //$table->foreign('control_type_uuid')->references('uuid')->on('control_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
