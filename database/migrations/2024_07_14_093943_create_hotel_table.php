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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id('hotel_id');
            $table->string('hotel_name');
            $table->string('hotel_desc')->nullable();
            $table->string('hotel_address')->nullable();
            $table->string('hotel_city')->nullable();
            $table->string('hotel_state')->nullable();
            $table->string('hotel_zip_code')->nullable();
            $table->string('hotel_phone_number')->nullable();
            $table->string('hotel_email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
