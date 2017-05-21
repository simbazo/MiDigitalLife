<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_pages', function (Blueprint $table) {
            $table->string('uuid',36)->primary()->unique();
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
        Schema::dropIfExists('header_pages');
    }
}
