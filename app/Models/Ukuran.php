<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    use HasFactory;
    protected $table = 'ukuran';
    protected $primaryKey = 'id_ukuran';
    protected $fillable = ['id_ukuran','ukuran'];

    public function detail_barang(){
        return $this->hasMany(DetailBarang::class, 'id_ukuran');
    }
}
