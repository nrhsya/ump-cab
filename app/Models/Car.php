<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // protected $primaryKey = 'id';

    // protected $fillable = ['drivers_license', 'owner_name', 'car_color', 'car_model', 'rental_fare', 'cab_fare', 'car_image', 'plate_num', 'additional_details'];
    protected $fillable = ['drivers_license', 'user_id','car_color', 'ic', 'car_model', 'status', 'rental_fare', 'cab_fare', 'car_image', 'plate_num', 'reg_status'];

    public function cab()
    {
        return $this->hasMany(Car::class);
    }

    public function carrental()
    {
        return $this->hasMany(CarRental::class);
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
