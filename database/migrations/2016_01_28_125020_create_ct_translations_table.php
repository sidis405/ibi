<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('ct_id')->unsigned();
            $table->string('nome');
            $table->string('slug');
            $table->string('locale')->index();

            $table->unique(['ct_id','locale']);
            $table->foreign('ct_id')->references('id')->on('ct')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ct_translations');
    }
}
