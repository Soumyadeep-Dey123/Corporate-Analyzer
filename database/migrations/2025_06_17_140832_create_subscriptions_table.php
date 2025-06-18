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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();                                     // PK
            $table->string('email')->unique();                // unique address :contentReference[oaicite:1]{index=1}
            $table->string('token', 64)->unique();            // confirmation / unsubscribe token :contentReference[oaicite:2]{index=2}
            $table->timestamp('verified_at')->nullable();     // double‑opt‑in marker :contentReference[oaicite:3]{index=3}
            $table->timestamps();                             // created_at / updated_at :contentReference[oaicite:4]{index=4}
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};