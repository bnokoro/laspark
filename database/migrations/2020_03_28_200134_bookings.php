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
        /**
         * CHANGES
         * Removed booking_id. The id can serve this purpose
         * Changed park_booked to parks_gardens_id and added a foreign key to link parks_gardens_id to the id in parks_gardens_table
         * Changed amount_booked to string from decimal so we could enter the accurate amount
         * Changed services_booked to service_id which will link an id in the services migration I just created. I added its foreign key too
         */
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parks_gardens_id');
            $table->unsignedBigInteger('service_id');
            $table->string('amount_booked');
            $table->boolean('booking_status');
            $table->dateTime('time_booked');
            $table->time('duration_booked');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('parks_gardens_id')->references('id')->on('parks_gardens')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
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
