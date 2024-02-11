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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('Title_Globale');
            $table->longText('description_Globale');
            $table->string('Title1');
            $table->longText('description1');
            $table->string('Mini_Title1');
            $table->string('Slug1');
            $table->string('Mini_Title2');
            $table->string('Slug2');
            $table->string('Title2');
            $table->longText('description2');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            // $table->string('image3')->nullable();
            $table->string('TitleQuotes');
            $table->string('SlugQuotes');
            $table->string('TitleCategory');
            $table->string('SlugCategory');
            $table->string('TitleFaq');
            $table->string('SlugFaq');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
