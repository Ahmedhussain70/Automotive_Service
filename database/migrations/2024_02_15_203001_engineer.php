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
        Schema::create('engineer', function (Blueprint $table) {
            $table->id('engID');
            $table->string('engName');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->foreign('engID')->references('depID')->on('department');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engineer');
    }
};
