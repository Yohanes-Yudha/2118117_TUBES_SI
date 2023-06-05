<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_gejala_penyakit extends Model
{
    use HasFactory;
    protected $table =  'tabel_gejala_tabel_penyakit';
    protected $fillable=[
        'tabel_penyakit_id_penyakit',
        'tabel_gejala_id_gejala'
    ];
    //  public function penyakit()
    // {
    //     return $this->belongsToMany(tabel_penyakit::class, 'tabel_gejala_penyakit', 'id_gejala', 'id_penyakit');
    // }
    // public function gejala()
    // {
    //     return $this->belongsToMany(tabel_gejala::class, 'tabel_gejala_penyakit','id_penyakit','id_gejala');
    // }
}
