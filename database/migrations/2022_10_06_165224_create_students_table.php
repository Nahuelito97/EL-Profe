<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('dni', 8);
            $table->date('date_of_birth');
            $table->string('phone')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->date('date_of_address');

            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')->references('id')->on('pais');

            $table->unsignedBigInteger('provincies_id');
            $table->foreign('provincies_id')->references('id')->on('provincies');

            $table->unsignedBigInteger('localities_id');
            $table->foreign('localities_id')->references('id')->on('localidads');

            $table->unsignedBigInteger('directions_id');
            $table->foreign('directions_id')->references('id')->on('directions');
            $table->enum('status',['AUSENTE','PRESENTE', 'TARDANZA'])->default('AUSENTE');


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
        Schema::dropIfExists('students');
    }
}
