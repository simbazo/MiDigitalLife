<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->string('uuid',36);
            $table->string('short_name')->unique();
            $table->string('long_name')->nullable();
            $table->string('user_created')->nullable();
            $table->string('user_updated')->nullable();
            $table->string('user_deleted')->nullable();
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('user_created')->references('uuid')->on('users')->onUpdated('cascade')->onDelete('restrict');
            $table->foreign('user_updated')->references('uuid')->on('users')->onUpdated('cascade')->onDelete('restrict');
            $table->foreign('user_deleted')->references('uuid')->on('users')->onUpdated('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
