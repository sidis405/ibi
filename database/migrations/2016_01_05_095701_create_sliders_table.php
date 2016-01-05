<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link')->nullable();
            $table->string('immagine');
            $table->integer('active')->default(0);
            $table->timestamps();
        });

        Schema::create('slider_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('slider_id')->unsigned();
            $table->string('titolo');
            $table->string('sottotitolo');
            $table->string('locale')->index();

            $table->unique(['slider_id','locale']);
            $table->foreign('slider_id')->references('id')->on('contenuti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sliders');
        Schema::drop('slider_translations');
    }
}
