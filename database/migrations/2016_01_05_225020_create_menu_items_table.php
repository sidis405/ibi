<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('menu_items_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('menu_items_id')->unsigned();
            $table->string('label');
            $table->string('locale')->index();

            $table->unique(['menu_items_id','locale']);
            $table->foreign('menu_items_id')->references('id')->on('menu_items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menu_items');
        Schema::drop('menu_items_translations');
    }
}
