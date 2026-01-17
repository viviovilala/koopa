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
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->string('name');
            $table->string('sku')->nullable();
            $table->string('category')->nullable();
            $table->unsignedInteger('moq')->default(0);
            $table->string('unit', 16)->default('kg');
            $table->json('service_area')->nullable();
            $table->string('status', 16)->default('draft');
            $table->string('currency', 8)->default('USD');
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
