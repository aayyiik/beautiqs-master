<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DetailPemesanan extends Model
{
    use HasFactory;

    protected $table = "detail_pemesanan";
    
    protected $fillable = ['id_pesan','kode_barang','jumlah_up','harga_up'];

  public function barang() {
    return $this->belongsTo(Barang::class, 'kode_barang');
  }
  public function pemesanan() {
    return $this->belongsTo(Pemesanan::class, 'id','id_pesan');
  }

  static function tambah_id_detail($kode_barang, $id_pesan, $jumlah_up, $harga_up){
    DetailPemesanan::create([
      "kode_barang" => $kode_barang,
      "id_pesan" => $id_pesan,
      "jumlah_up" => $jumlah_up,
      "harga_up"=> $harga_up,
    ]);
  }

  
}
