<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal_details', function (Blueprint $table) {
          $table->increments('DDealId');
          $table->integer('DealId')->unsigned();
          $table->integer('Quantity');
          $table->integer('ItemId')->unsigned();
          $table->timestamps();

          $table->foreign('ItemId')
          ->references('ItemId')
          ->on('items')
          ->onDelete('cascade');

          $table->foreign('DealId')
          ->references('DealId')
          ->on('deals')
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
        Schema::drop('deal_details');
    }
}
