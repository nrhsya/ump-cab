<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cab extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'user_id', 'passenger_name', 'passenger_email', 'passenger_phone_num', 'pickuplatlng', 'dropofflatlng', 'pickup_location', 'dropoff_location', 'total_cab_fare', 'total_distance', 'status'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
