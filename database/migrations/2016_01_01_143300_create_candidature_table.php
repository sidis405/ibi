<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidature', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('posizione_id');
            $table->string('nome');
            $table->string('cognome');
            $table->string('email');
            $table->string('messagio');
            $table->string('cv_path');
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
        Schema::drop('candidature');
    }
}
