<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_rule_gejala extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_rule';
    protected $table = 'tabel_rule_gejala';
    protected $guarded=[];
    public function gejala()
    {
        return $this->belongsToMany(tabel_gejala::class, 'tabel_gejala_penyakit', 'id_rule', 'id_gejala');
    }
    public function penyakit()
    {
        return $this->belongsToMany(tabel_penyakit::class, 'tabel_gejala_penyakit', 'id_rule', 'id_penyakit');
    }
}
