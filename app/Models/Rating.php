<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'carrental_id', 'cab_id', 'user_id', 'rating', 'feedback'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
