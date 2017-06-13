<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_question', function (Blueprint $table) {
            $table->string('product_uuid')->nullable(false);
            $table->string('question_uuid')->nullable(false);
            $table->integer('order')->nullable(false)->default(0);
            $table->boolean('grid')->nullable(false)->default(0);
            
            //$table->foreign('product_uuid')->references('uuid')->on('products')->onDelete('cascade');
            //$table->foreign('question_uuid')->references('uuid')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('product_question', function (Blueprint $table) {
            //
        });
    }
}
