<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
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
