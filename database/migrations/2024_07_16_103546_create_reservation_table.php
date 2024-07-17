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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('reservation_id');

            $table->unsignedBigInteger('guest_id');
            $table ->unsignedBigInteger('room_id');
            $table->string('reservation_capacity');
            $table->string('reservation_type');
            $table->date('reservation_start_date');
            $table->date('reservation_end_date');

            $table->integer('number_of_guests');
            //$table->string('special_requests')->nullable();

            $table->timestamps();


            $table->foreign('guest_id')

                ->references('guest_id')

                ->on('guests')

                ->onDelete('cascade');

                $table->foreign('room_id')

                ->references('room_id')

                ->on('rooms')

                ->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
