<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            
            $table->id();
            $table->string('booking_id');
            $table->string('park_booked');
            $table->decimal('amount_booked', 8, 2);
            $table->string('services_booked');
            $table->boolean('booking_status');
            $table->dateTime('time_booked');
            $table->time('duration_booked');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
