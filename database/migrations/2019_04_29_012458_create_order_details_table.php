<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('ODId');
            $table->integer('OId');
            $table->integer('ItemId');
            $table->integer('Quantity');
            $table->timestamps();

            $table->foreign('OId')
                    ->references('OId')
                    ->on('orders')
                    ->onDelete('cascade');

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
        Schema::drop('order_details');
    }
}
