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
        Schema::table('company_users', function (Blueprint $table) {
            // For the employee's overall account status
            $table->tinyInteger('account_status')
            ->default(1)
            ->comment('1: active, 2: inactive, 3: blocked')
            ->after('users_phone');

            // For the survey progress
            $table->tinyInteger('survey_status')
                ->default(1)
                ->comment('1: no link sent, 2: link sent/not submitted, 3: submitted')
                ->after('account_status');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company_users', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
