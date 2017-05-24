<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecentProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recent_projects', function (Blueprint $table) {
            $table->string('uuid',36)->uniue();
            $table->string('title')->index();
            $table->string('short_description')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status',4);
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
        Schema::dropIfExists('recent_projects');
    }
}
