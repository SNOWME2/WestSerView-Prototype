<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $primaryKey = 'hotel_id'; // Primary key is 'hotel_id'

    protected $fillable = [
        'hotel_name',
        'hotel_desc',
        'hotel_address',
        'hotel_city',
        'hotel_state',
        'hotel_zip_code',
        'hotel_phone_number',
        'hotel_email',
    ];

    public function rooms()
    {
        return $this->hasMany(Rooms::class, 'hotel_id', 'hotel_id');
    }
}
