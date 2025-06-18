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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();                      // id (primary key)
            $table->string('name');           // contact name
            $table->string('email');          // email address
            $table->string('phone');          // phone number
            $table->string('company_name');   // company name
            $table->text('message');          // message content
            $table->timestamps();             // created_at + updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};