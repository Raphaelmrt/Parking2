<?php

namespace App\Models;

use App\Models\Place;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function places()
    {
        return $this->belongsTo(Place::class);
    }


}
