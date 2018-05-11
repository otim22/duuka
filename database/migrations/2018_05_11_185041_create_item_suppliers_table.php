<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id');
            $table->integer('quantity_supplied');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('minimum_order_quantity');
            $table->integer('maximum_order_quantity');
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
        Schema::dropIfExists('item_suppliers');
    }
}
