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
        Schema::create('responses', function (Blueprint $table) {
            $table->id();                                            // primary key :contentReference[oaicite:1]{index=1}
            $table->foreignId('survey_id')                           // FK -> surveys.id
                ->constrained('surveys')
                ->onDelete('cascade');                             // cascade delete :contentReference[oaicite:2]{index=2}

            $table->foreignId('employee_id')                         // FK -> employees.id
                ->constrained('employees')
                ->onDelete('cascade');

            $table->dateTime('submitted_at')->nullable();            // when the form was sent
            $table->timestamps();                                    // created_at & updated_at :contentReference[oaicite:3]{index=3}
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};