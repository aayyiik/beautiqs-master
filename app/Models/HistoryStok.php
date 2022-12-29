<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryStok extends Model
{
    use HasFactory;
    protected $table = 'history_stok';
    protected $primaryKey = 'id_his';
    protected $fillable = ['id_his','kode_barang','tgl_his','stok_masuk','status_stok'];

    public function barang()
    {
        return $this->belongsTo(Barang::class,'kode_barang');
    }
 
}
