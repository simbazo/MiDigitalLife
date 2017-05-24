<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_users', function (Blueprint $table) {
            $table->string('client_id',36);
            $table->string('user_id',36);


            $table->foreign('client_id')->references('uuid')->on('users')->onDelete('cascade');
            $table->foreign('user_id')->references('uuid')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_users', function (Blueprint $table) {
            //
        });
    }
}
