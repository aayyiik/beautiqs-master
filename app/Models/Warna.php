<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Warna extends Model
{

    use HasFactory;
    protected $table = 'warna';
    protected $primaryKey = 'id_warna';
    protected $fillable = ['id_warna','warna'];

    public function detail_barang(){
        return $this->hasMany(DetailBarang::class, 'id_warna');
    }
}


