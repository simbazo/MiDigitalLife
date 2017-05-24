<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_types', function (Blueprint $table) {
            $table->string('uuid',36)->unique();
            $table->string('control_type')->nullable(false);
            $table->string('user_created')->nullable();
            $table->string('user_updated')->nullable();
            $table->string('user_deleted')->nullable();
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
        Schema::dropIfExists('control_types');
    }
}
