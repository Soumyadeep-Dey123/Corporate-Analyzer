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
        Schema::table('company_masters', function (Blueprint $table) {
            // Using ENUM for clarity. Adjust the list as needed.
            $table->tinyInteger('status')
                  ->default(1)
                  ->comment('1: active, 0: blocked')
                  ->after('company_phone');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company_masters', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
