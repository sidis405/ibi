<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdottiTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodotti_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('prodotti_id')->unsigned();
            $table->string('formulazione');
            $table->string('locale')->index();

            $table->unique(['prodotti_id','locale']);
            $table->foreign('prodotti_id')->references('id')->on('prodotti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prodotti_translations');
    }
}
