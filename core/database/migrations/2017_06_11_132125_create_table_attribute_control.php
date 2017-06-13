<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAttributeControl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('attribute_control', function (Blueprint $table) {
            $table->string('control_uuid')->nullable(false);
            $table->string('attribute_uuid')->nullable(false);
            
            $table->foreign('control_uuid')->references('uuid')->on('controls')->onDelete('cascade');
            $table->foreign('attribute_uuid')->references('uuid')->on('attributes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attribute_control', function (Blueprint $table) {
            //
        });
    }
}
