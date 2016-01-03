<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenutiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenuti', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('descrizione');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('contenuti_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('contenuto_id')->unsigned();
            $table->longText('testo');
            $table->string('locale')->index();

            $table->unique(['contenuto_id','locale']);
            $table->foreign('contenuto_id')->references('id')->on('contenuti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contenuti');
        Schema::drop('contenuti_translations');
    }
}
