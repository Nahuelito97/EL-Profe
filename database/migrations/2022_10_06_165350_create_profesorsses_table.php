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

            $table->string('email')->nullable()->unique();

            $table->unsignedBigInteger('telefono_id');
            $table->foreign('telefono_id')->references('id')->on('telefonos');

            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos');

            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')->references('id')->on('pais');

            $table->unsignedBigInteger('provincies_id');
            $table->foreign('provincies_id')->references('id')->on('provincies');

            $table->unsignedBigInteger('localities_id');
            $table->foreign('localities_id')->references('id')->on('localidads');

            $table->unsignedBigInteger('directions_id');
            $table->foreign('directions_id')->references('id')->on('directions');
            $table->unsignedBigInteger('especialitis_id');
            $table->foreign('especialitis_id')->references('id')->on('especialities');

            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
