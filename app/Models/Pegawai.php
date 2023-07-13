<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;
use Carbon\Carbon;


class Pegawai extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * fillable
     * 
     */
    public $timestamps = false;
    public $table = 'pegawais';
    protected $primarykey='id';

     protected $fillable = [
        // 'id_pegawai',
        //   'alamat_pegawai',
        'nama_pegawai',
        'tanggal_lahir',
        'nomor_telepon',
        'role',
        'email',
        'password',
     ];
}
