<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $primaryKey = 'room_id'; // Primary key is 'room_id'

    protected $fillable = [
        'hotel_id',
        'room_type',
        'room_number',
        'capacity',
        'price',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id', 'hotel_id');
    }

    public function Reservation()
    {
        return $this->hasMany(Reservations::class, 'room_id', 'room_id');
    }
}
