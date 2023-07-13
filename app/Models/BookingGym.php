<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingGym extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'booking_gyms';
    protected $primarykey = 'id_member';

    protected $fillable = [ 


        'tanggal',
        'sesi',
        'tanggal',
        'sesi',
        'jam_booking',
        
        
    ];
}
