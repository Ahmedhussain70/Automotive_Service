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
                Schema::create('booking', function (Blueprint $table) {
            $table->id('bookingID');
            $table->string('bookingName');
            $table->string('email');
            $table->string('phone')->unique();
            $table->date('service_Date')->nullable();
            $table->string('service_Time');
            $table->string('service_type');
            $table->string('car_model');
            $table->string("branch");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
