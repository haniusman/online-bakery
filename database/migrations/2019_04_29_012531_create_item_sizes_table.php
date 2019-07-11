<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_sizes', function (Blueprint $table) {
          $table->increments('ItemSizeId');
          $table->integer('ItemId')->unsigned();
          $table->integer('Size');
          $table->integer('Price');
           $table->timestamps();

           $table->foreign('ItemId')
           ->references('ItemId')
           ->on('items')
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
        Schema::drop('item_sizes');
    }
}
