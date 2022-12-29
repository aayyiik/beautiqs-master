<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'kode_barang';
    protected $fillable = ['kode_barang','nama_barang','id_jb','stok','harga_beli_barang','harga_jual_barang'];

    static function detail_produk($kode_barang){
        $data = Barang::where("kode_barang",$kode_barang)->first();
        return $data;
    }
   public function jenis_barang()
   {
       return $this->belongsTo(JenisBarang::class,'id_jb');
   }

   public function detail_pemesanan(){
    return $this->hasMany(DetailPemesanan::class, 'id','kode_barang');
}

    public function detail_barang(){
        return $this->hasMany(DetailBarang::class, 'kode_barang');
    }
 
    public function histori()
    {
        return $this->hasMany(HistoryStok::class, 'id_his');
    }

   
}
