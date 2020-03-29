<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParksGardens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parks_gardens', function (Blueprint $table) {
            
            $table->id();
            $table->string('park_id');
            $table->string('park_price');
            $table->longText('park_description');
            $table->string('park_availability');
            $table->string('park_status');
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
        Schema::dropIfExists('parks_gardens');
    }
}
