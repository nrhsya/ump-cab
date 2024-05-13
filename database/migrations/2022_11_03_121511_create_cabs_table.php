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
        Schema::create('cabs', function (Blueprint $table) {
            $table->id();
            // $table->string('drivers_license');
            $table->foreignId('car_id')->nullable();
            $table->foreignId('user_id');
            $table->string('passenger_name');
            $table->string('passenger_email');
            $table->string('passenger_phone_num');
            $table->string('pickup_location');
            $table->string('pickuplatlng');
            $table->string('dropoff_location');
            $table->string('dropofflatlng');
            $table->string('status')->nullable();
            $table->double('total_distance')->nullable();
            $table->double('total_cab_fare')->nullable();
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
        Schema::dropIfExists('cabs');
    }
};
