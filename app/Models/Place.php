<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place extends Model
{
    use HasFactory;
    public $timestamps = false; 

    protected $fillable = ['DateDébut', 'Durée'];

    public function Reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    public function estOccupe()
    {
        return(Reservation::estActif($this->id));
    }
}
