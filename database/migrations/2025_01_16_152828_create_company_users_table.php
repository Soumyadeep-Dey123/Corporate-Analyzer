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
        Schema::create('company_users', function (Blueprint $table) {
            $table->id();  // Default primary key with name 'id'
            $table->foreignId('company_id')
                ->constrained('company_masters')
                ->onDelete('cascade');
            $table->string('users_name');
            $table->string('users_email', 191)->unique();
            $table->string('users_phone');
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_users');
    }
};
