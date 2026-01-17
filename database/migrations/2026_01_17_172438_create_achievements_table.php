<?php

use App\Models\User;
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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->date('date');
            $table->string('proof', 255);
            $table->string('photo', 255);
            $table->text('description');
            $table->boolean('is_active')->default(true);
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('category_achievement_id')->constrained('category_achievements');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignIdFor(User::class, 'created_by')->nullable()->constrained('users', 'id');
            $table->foreignIdFor(User::class, 'modified_by')->nullable()->constrained('users', 'id');
            $table->foreignIdFor(User::class, 'deleted_by')->nullable()->constrained('users', 'id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
