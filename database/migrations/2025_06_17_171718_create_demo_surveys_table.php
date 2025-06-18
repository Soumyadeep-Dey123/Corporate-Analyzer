<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('demo_surveys', function (Blueprint $table) {
            $table->id();
            /* — personal info — */
            $table->string('name');
            $table->string('email');
            $table->string('department')->nullable();
            $table->string('position')->nullable();

            /* — work experience — */
            $table->string('work_experience')->nullable();

            /* — ratings (1‑5) — */
            $table->unsignedTinyInteger('engagement')->default(0);
            $table->unsignedTinyInteger('satisfaction')->default(0);
            $table->unsignedTinyInteger('work_life_balance')->default(0);
            $table->unsignedTinyInteger('communication')->default(0);
            $table->unsignedTinyInteger('leadership')->default(0);
            $table->unsignedTinyInteger('growth')->default(0);
            $table->unsignedTinyInteger('recommend')->default(0);

            /* — open‑ended — */
            $table->text('feedback')->nullable();
            $table->text('improvements')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demo_surveys');
    }
};