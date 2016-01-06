<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('ruolo');
            $table->string('farmacia')->nullable();
            $table->string('farmacia_posizione')->nullable();
            $table->integer('anno_laurea');
            $table->integer('numero_albo');
            $table->integer('provincia_albo');
            $table->integer('specializzazione');
            $table->string('telefono');
            $table->string('luogo_nascita');
            $table->date('data_nascita');
            $table->string('indirizzo_attivita');
            $table->string('citta_attivita');
            $table->integer('provincia_attivita');
            $table->string('cap_attivita');
            $table->string('indirizzo_residenza');
            $table->string('citta_residenza');
            $table->integer('provincia_residenza');
            $table->string('cap_residenza');
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
        Schema::drop('profiles');
    }
}
