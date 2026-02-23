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
            $table->string('previous_school');
            $table->string('graduation_year', 4);
            $table->string('reference');
            $table->string('referral_code_input', 30);
            $table->unsignedBigInteger('registration_fee')->default(0);
            $table->unsignedBigInteger('discount_amount')->default(0);
            $table->unsignedBigInteger('final_amount')->default(0);
            $table->string('payment_proof');
            $table->enum('status', ['0', '1'])
                ->default('0')
                ->comment('0: process, 1: verified');
            $table->foreignId('code_referal_id')
                ->nullable()
                ->constrained('code_referals')
                ->nullOnDelete();
            $table->foreignId('study_program_id')->constrained('study_programs');
            $table->timestamps();
            $table->softDeletes();
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
