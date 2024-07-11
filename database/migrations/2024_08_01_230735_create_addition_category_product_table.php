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
        Schema::create('addition_category_product', function (Blueprint $table) {
            $table->uuid('product_id');
            $table->uuid('addition_category_id');

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('addition_category_id')->references('id')->on('addition_categories')->onDelete('cascade');

            $table->primary(['product_id', 'addition_category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addition_category_products');
    }
};
