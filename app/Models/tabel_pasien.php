<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_pasien extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pasien';
    protected $table = 'tabel_pasien';
    protected $fillable = ['id', 'user_id','name', 'email', 'password'];
    
}

