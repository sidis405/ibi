<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdottiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodotti', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('slug');
            $table->string('formulazione');

            $table->integer('principio_attivo_id')->nullable();
            $table->integer('fascia_id')->nullable();
            $table->integer('categoria_terapeutica_id')->nullable();
            $table->integer('paese_id')->nullable();

            $table->string('foglietto_illustrativo')->nullable();
            $table->string('scheda_tecnica')->nullable();
            $table->string('aic');
            $table->string('atc');
            $table->string('regime_dispensazione')->nullable();;
            $table->string('unita')->nullable();
            $table->integer('validita_mesi');
            $table->integer('active')->default(1);
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
        Schema::drop('prodotti');
    }
}
