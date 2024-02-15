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
        Schema::create('technical', function (Blueprint $table) {
            $table->id('techID');
            $table->string('techName');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->foreign('techID')->references('depID')->on('department');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical');
    }
};
