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
        /**
         * CHANGES
         * Removed park_id. The id can serve the same purpose
         * Changed availability to boolean and made it available by default - We might change this later on
         * I'm thinking availability and status might serve the same purpose. We could leave it as is for now.
         */
        Schema::create('parks_gardens', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->longText('description');
            $table->string('availability');
            $table->string('status');
            $table->string('land_area');
            $table->string('toilets');
            $table->string('trees');
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
