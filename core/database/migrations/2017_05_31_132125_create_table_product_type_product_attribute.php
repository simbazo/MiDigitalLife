<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductTypeProductAttribute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('control_type_control_attribute', function (Blueprint $table) {
            $table->string('control_type_uuid')->nullable(false);
            $table->string('control_attribute_uuid')->nullable(false);
            
            $table->foreign('control_type_uuid')->references('uuid')->on('control_types')->onDelete('cascade');
            $table->foreign('control_attribute_uuid')->references('uuid')->on('control_attributes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
