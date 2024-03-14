<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');;
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('shipping_address');
            $table->string('telephone_number');
            $table->string('country_region');
            $table->string('Full_Name');
            $table->string('email');
            $table->string('province');
            $table->string('city');
            $table->string('zip_code');
            $table->decimal('total_cost', 10, 2);
            $table->timestamps();
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('quantity');
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->decimal('unit_price', 10, 2);
            $table->timestamps();
        });
     

     
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
      
        Schema::dropIfExists('orders');
    }
}
