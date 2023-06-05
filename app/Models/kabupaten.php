<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kabupaten extends Model
{
    use HasFactory;
    protected $table='kabupaten';
    protected $primaryKey ='id';
    protected $guarded=[];
    public $timestamps=false;

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'id_prov');
    }

}
