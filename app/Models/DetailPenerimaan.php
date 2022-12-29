<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenerimaan extends Model
{
    use HasFactory;


    protected $table = "detail_penerimaan";
    
    protected $fillable = ['id_terima','kode_barang','jumlah_his','harga_his','subtotal'];

    public function barang() {
        return $this->belongsTo(Barang::class, 'kode_barang');
      }
      public function penerimaan() {
        return $this->belongsTo(Penerimaan::class, 'id_terima');
      }

      static function tambah_id_detail($kode_barang, $id_terima, $harga_his, $jumlah_his, $subtotal){
        DetailPenerimaan::create([
          "kode_barang" => $kode_barang,
          "id_terima" => $id_terima,
          "jumlah_his" => $jumlah_his,
          "harga_his"=> $harga_his,
          "subtotal" => $subtotal,
        ]);
      }
}
