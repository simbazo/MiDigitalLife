<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->string('uuid',36)->primary()->unique();
            $table->string('background')->nullable();
            $table->string('welcome_line1')->nullable();
            $table->string('welcome_line2')->nullable();
            $table->string('welcome_line3')->nullable();
            $table->string('getting_started')->nullable();
            $table->string('getting_started_url')->nullable();
            $table->string('bunner_paragraph')->nullable();
            $table->string('bunner_url')->nullable();
            $table->string('section_bunner')->nullable();
            $table->string('user_created',36)->nullable();
            $table->string('user_updated',36)->nullable();
            $table->string('user_deleted',36)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_pages');
    }
}
