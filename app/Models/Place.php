<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    public $timestamps = false; 

    protected $fillable = ['DateDébut', 'Durée'];

    public function Reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
