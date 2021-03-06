<?php

namespace App\Models;

use App\Models\User;
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
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function estActif($id)
    {
        if(Reservation::where('place_id', $id)->where('StatutReservation', 1)->get()->isNotEmpty())
            return true;
        else
            return false;
        
    }


}
