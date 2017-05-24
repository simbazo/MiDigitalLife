<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcNGOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cc_ngos', function (Blueprint $table) {
            $table->string('uuid',36)->primary();
            $table->string('acronym')->nullable();
            $table->string('name')->index();
            $table->string('logo')->nullable();
            $table->string('type_id')->nullable();
            $table->string('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('pobox')->nullable();
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
        Schema::dropIfExists('cc_ngos');
    }
}
