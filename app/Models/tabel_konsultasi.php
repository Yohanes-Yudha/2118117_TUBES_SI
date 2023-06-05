<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_konsultasi extends Model
{
    use HasFactory;
    protected $table = 'tabel_konsultasi';
    protected $primary = 'id_konsultasi';
    protected $fillable=[
        'id_user',
        'id_dokter',
        'tanggal',
        'created_at',
        'updated_at',
    ];
    public function pasien()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function dokter()
    {
        return $this->belongsTo(User::class, 'id')->where('role', 'dokter');
    }   
}
