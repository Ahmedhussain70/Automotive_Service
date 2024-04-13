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
        Schema::create("purchases", function(Blueprint $table){
            $table->id("pur_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("pro_id");
            $table->foreign("user_id")->references("id")->on('users');
            $table->foreign("pro_id")->references("proID")->on('product');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dorpIfExists("purchases");
    }
};
