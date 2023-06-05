<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    use HasFactory;
    protected $table='provinsi';
    protected $primaryKey='id';
    protected $guarded=[];
    public $timestamps = false;

    public function kabupaten()
    {
        return $this->hasMany(Kabupaten::class, 'id_prov');
    }

}
