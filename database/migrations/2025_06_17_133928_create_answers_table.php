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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();                                   // PK :contentReference[oaicite:0]{index=0}
            $table->foreignId('response_id')                // FK → responses.id
                  ->constrained('responses')
                  ->onDelete('cascade');                    // keep orphans out :contentReference[oaicite:1]{index=1}
    
            $table->foreignId('question_id')                // FK → questions.id
                  ->constrained('questions')
                  ->onDelete('cascade');
    
            $table->text('answer');                         // the user’s answer
            $table->timestamps();                           // created_at / updated_at :contentReference[oaicite:2]{index=2}
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};