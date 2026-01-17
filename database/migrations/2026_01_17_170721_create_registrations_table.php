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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address');
            $table->string('place_of_birth');
            $table->string('date_of_birth');
            $table->string('phone_number', 16);
            $table->string('email', 100);
            $table->foreignId('study_program_id')->constrained('study_programs');
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
        Schema::dropIfExists('registrations');
    }
};
