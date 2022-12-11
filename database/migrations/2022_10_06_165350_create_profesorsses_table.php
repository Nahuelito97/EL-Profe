<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesorsses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('dni', 8);
            $table->date('date_of_birth');
            $table->string('phone')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('date_of_address');


            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')->references('id')->on('pais');

            $table->unsignedBigInteger('provincy_id');
            $table->foreign('provincy_id')->references('id')->on('provincies');

            $table->unsignedBigInteger('locality_id');
            $table->foreign('locality_id')->references('id')->on('localidads');

            $table->unsignedBigInteger('direction_id');
            $table->foreign('direction_id')->references('id')->on('directions');


            $table->unsignedBigInteger('especiality_id');
            $table->foreign('especiality_id')->references('id')->on('especialities');

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
        Schema::dropIfExists('profesorsses');
    }
}
