<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosizioniAperteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posizioni_aperte', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titolo');
            $table->string('slug');
            $table->string('sede');
            $table->string('descrizione');
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
        Schema::drop('posizioni_aperte');
    }
}
