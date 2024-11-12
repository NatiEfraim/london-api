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
        Schema::create('car_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_by');
            $table->date('start_date'); // Start date of the rental
            $table->time('start_time'); // Start time of the rental
            $table->date('end_date'); // End date of the rental
            $table->time('end_time'); // End time of the rental
            //? 1--> pendig. 2--> approved. 3 -->canceld
            $table->integer('status_booking')->default(1);
            $table->integer('drivers')->default('1');
            $table->boolean('goal_booking')->default('0');         
            $table->boolean('is_deleted')->default('0');         
            $table->timestamps();
            $table->foreign('booking_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_bookings');
    }
};
