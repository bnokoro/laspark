<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_logo')->nullable();
            $table->string('home_banner1')->nullable();
            $table->string('home_banner2')->nullable();
            $table->string('home_heading')->nullable();
            $table->string('home_heading2')->nullable();
            $table->string('home_sub_heading')->nullable();
            $table->string('home_point1')->nullable();
            $table->string('home_point2')->nullable();
            $table->string('home_point3')->nullable();
            $table->string('home_point4')->nullable();
            $table->string('home_point5')->nullable();
            $table->string('home_point6')->nullable();
            $table->string('home_point7')->nullable();
            $table->string('home_point8')->nullable();
            $table->string('page2_banner')->nullable();
            $table->string('page2_heading')->nullable();
            $table->string('page3_banner')->nullable();
            $table->string('page3_heading')->nullable();
            $table->string('login_background_image')->nullable();
            $table->string('footer_image')->nullable();
            $table->string('about_us')->nullable();
            $table->string('contact_us')->nullable();
            $table->string('faqs')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
