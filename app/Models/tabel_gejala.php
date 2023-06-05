<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_gejala extends Model
{
    
    use HasFactory;
    protected $primaryKey = 'id_gejala';
    protected $table = 'tabel_gejala';
    // protected $fillable=['id_penyakit','kode_gejala','nama_gejala'];
    protected $guarded=[];
    
    public function penyakit()
    {
        return $this->belongsToMany(tabel_penyakit::class, 'tabel_gejala_penyakit', 'gejala_id', 'penyakit_id');
    }
}
