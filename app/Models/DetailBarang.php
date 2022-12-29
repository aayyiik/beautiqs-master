<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBarang extends Model
{
    use HasFactory;
    protected $table = "detail_barang";
    
    protected $fillable = ['kode_barang','id_warna','id_ukuran'];


    public function barang() {
        return $this->belongsTo(Barang::class, 'kode_barang');
      }

    public function warna() {
        return $this->belongsTo(Warna::class, 'id_warna');
      }

    public function ukuran() {
        return $this->belongsTo(Ukuran::class, 'id_ukuran');
      }
}
