<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensigym extends Model
{
    use HasFactory;

     /**
     * fillable
     * 
     */

    public $timestamps = false;
    protected $primarykey = 'id_booking_gym';
    public $table = 'presensi_booking_gym';

    protected $fillable = [
        'id_member',
        'tanggal_booking',
        'tanggal_yang_dibooking',
        'slot_waktu',
        'waktu_presensi',
    ];
}
