<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunicatiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunicati', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titolo');
            $table->string('slug');
            $table->string('allegato');
            $table->string('descrizione');
            $table->longText('testo');
            $table->string('active');
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
        Schema::drop('comunicati');
    }
}
