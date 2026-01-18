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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('leader_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('drop_point_id')->nullable()->constrained()->nullOnDelete();
            $table->string('title');
            $table->unsignedInteger('target_volume')->default(0);
            $table->unsignedInteger('current_volume')->default(0);
            $table->string('unit', 16)->default('kg');
            $table->string('status', 16)->default('open');
            $table->timestamp('cut_off_at')->nullable();
            $table->timestamp('price_locked_at')->nullable();
            $table->string('currency', 8)->default('USD');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
