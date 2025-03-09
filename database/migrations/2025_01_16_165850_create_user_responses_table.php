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
        Schema::create('user_responses', function (Blueprint $table) {
            $table->id('response_id');  // Primary key of type unsignedBigInteger
            $table->foreignId('question_id')  // Foreign key referencing questions.id
                ->constrained('questions')
                ->onDelete('cascade');
            $table->foreignId('company_users_id')  // Foreign key referencing company_users.id
                ->constrained('company_users')
                ->onDelete('cascade');
            $table->text('value');  // The response value from the user
            $table->timestamps();
        });
        
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_responses');
    }
};
