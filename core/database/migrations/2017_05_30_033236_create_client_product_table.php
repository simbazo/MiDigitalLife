<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_product', function (Blueprint $table) {
            $table->string('client_uuid')->nullable(false);
            $table->string('product_uuid')->nullable(false);
            
            $table->foreign('client_uuid')->references('uuid')->on('clients')->onDelete('cascade');
            $table->foreign('product_uuid')->references('uuid')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_product', function (Blueprint $table) {
            //
        });
    }
}