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
            $table->integer('pagina_id');
            $table->timestamps();
        });

        Schema::create('contenuti_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('contenuti_id')->unsigned();
            $table->longText('testo');
            $table->string('locale')->index();

            $table->unique(['contenuti_id','locale']);
            $table->foreign('contenuti_id')->references('id')->on('contenuti')->onDelete('cascade');
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
