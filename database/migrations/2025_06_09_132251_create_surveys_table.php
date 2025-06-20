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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id("id")->primary();
            $table->foreignId("company_id")->constrained('companies')->onDelete('cascade');
            $table->string("title");
            $table->text("description")->nullable();
            $table->boolean('is_active')->default(false);
            $table->dateTime("start_date")->nullable();
            $table->dateTime("end_date")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};