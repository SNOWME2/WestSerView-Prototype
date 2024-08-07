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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('room_id');
            $table->unsignedBigInteger('hotel_id');
            $table->string('room_type');
            $table->string('room_number')->nullable();
            $table->integer('capacity')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->timestamps();

            $table->foreign('hotel_id')->references('hotel_id')->on('hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
