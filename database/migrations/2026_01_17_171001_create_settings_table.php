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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('school_name', 100);
            $table->text('address');
            $table->string('telephone', 50);
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
        Schema::dropIfExists('settings');
    }
};
