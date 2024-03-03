<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->longText('description');
            $table->integer('quantity', unsigned:true);
            $table->integer('sold');
            $table->unsignedDouble('price');
            $table->integer('old_price');
            $table->string('images')->nullable();
            $table->enum('status', ['In Stock', 'Out of Stock']);
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('brand_id')->index();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
