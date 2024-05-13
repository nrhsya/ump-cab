<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('drivers_license')->nullable();
            $table->string('ic')->nullable();
            $table->foreignId('user_id')->onDelete('cascade');
            $table->string('car_color')->nullable();
            $table->string('car_model')->nullable();
            $table->double('cab_fare');
            $table->double('rental_fare');
            $table->string('rental')->nullable();
            $table->string('cab')->nullable();
            $table->string('car_image')->nullable();
            $table->string('plate_num');
            $table->string('reg_status');
            $table->string('status');
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
        Schema::dropIfExists('cars');
    }
};
