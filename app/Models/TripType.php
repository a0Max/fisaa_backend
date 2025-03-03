<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}