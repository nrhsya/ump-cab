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
        Schema::create('car_rentals', function (Blueprint $table) {
            $table->id();
            $table->string('drivers_license');
            $table->string('ic');
            $table->foreignId('car_id');
            $table->foreignId('user_id');
            $table->string('renter_name');
            $table->string('renter_email');
            $table->string('renter_phone_num');
            $table->string('rental_status');
            $table->integer('rental_duration');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->decimal('rental_amount');
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
        Schema::dropIfExists('car_rentals');
    }
};
