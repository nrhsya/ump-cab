<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function carrental()
    {
        return $this->belongsTo(CarRental::class);
    }

    public function cab()
    {
        return $this->belongsTo(Cab::class);
    }
}
