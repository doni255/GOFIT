<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'members';
    protected $primarykey = 'id';

    protected $fillable = [

        'nama_member',
        'tanggal_lahir',
        'email',
        'deposit_uang',
        'deposit_kelas',
        'nomor_telepon',
        'gender',
        'status',
        
    ];
}
