<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;
    protected $table='reservations';

    protected $fillable = [
        'room_id',
        'guest_id',
        'reservation_type',
        'reservation_capacity',
        'reservation_start_date',
        'reservation_end_date',

    ];
    public function Rooms()
    {
        return $this->belongsTo(Rooms::class, 'room_id', 'room_id');
    }
    public function Guest()
    {
        return $this->belongsTo(User::class, 'guest_id', 'guest_id');
    }


}
