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
        Schema::create('code_referals', function (Blueprint $table) {
            $table->id();
            $table->string('code', 30)->unique();
            $table->enum('discount_type', ['1', '2'])->comment('1: percent, 2: fixed');
            $table->unsignedInteger('discount_value'); // 10 = 10% | 50000 = Rp50.000
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->unsignedInteger('quota')->nullable(); // null = unlimited
            $table->unsignedInteger('used_count')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('code_referals');
    }
};
