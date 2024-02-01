<?php

use App\Models\Category;
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
        //
        Schema::table('products', function (Blueprint $table) {
            $table->foreignIdFor(Category::class)->nullable()->constrained()->cascadeOnDelete();
            // cascadeOnDelete => if u delete category u will destroy all their products too
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeignIdFor(Category::class);
            // cascadeOnDelete => if u delete category u will destroy all their products too
        });
    }
};
