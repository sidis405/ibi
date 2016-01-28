<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pa_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pa_id')->unsigned();
            $table->string('nome');
            $table->string('slug');
            $table->string('locale')->index();

            $table->unique(['pa_id','locale']);
            $table->foreign('pa_id')->references('id')->on('pa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pa_translations');
    }
}
