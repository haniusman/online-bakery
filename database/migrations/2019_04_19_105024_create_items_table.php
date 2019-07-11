<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('ItemId');
            $table->integer('CatId');
            $table->string('iname');
            $table->string('path');
            $table->integer('stock');
            $table->integer('size');
            $table->string('price');
            $table->timestamps();
            $table->foreign('CatId')
                  ->references('CatId')
                  ->on('categories')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
