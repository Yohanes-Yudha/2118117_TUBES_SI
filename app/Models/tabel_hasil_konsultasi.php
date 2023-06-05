<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_hasil_konsultasi extends Model
{
    use HasFactory;
    protected $table = 'tabel_hasil_konsultasi';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id',
        'nama_dokter',
        'nama_pasien',
        'hasil_konsultasi',
        'id_user',
        'created_at'
    ];
}
