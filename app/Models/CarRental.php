<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRental extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'drivers_license', 'ic', 'rental_status', 'user_id', 'renter_name', 'renter_email', 'renter_phone_num', 'start_date', 'end_date', 'rental_duration', 'rental_amount'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
