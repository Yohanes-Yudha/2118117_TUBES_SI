<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_penyakit extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_penyakit';
    protected $table = 'tabel_penyakit';
    protected $guarded=[];

    public function gejala()
    {
        return $this->belongsToMany(tabel_gejala::class, 'tabel_gejala_penyakit','penyakit_id','gejala_id');
    }

    public function gejalas()
    {
        return $this->belongsToMany(tabel_gejala::class);
    }

}
