<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    use HasFactory;
    protected $table = 'penerimaan';
    protected $primaryKey = 'id_terima';
    protected $fillable = ['id_terima','id_sup','id_user','tgl_terima','total_harga','status_terima'];

    public function user() {
        return $this->belongsTo(Users::class, 'id_user');
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class, 'id_sup');
    }
    
    public function pembayaran() {
        return $this->belongsTo(Pembayaran::class, 'id_bayar');
    }
    

    public function detail_penerimaan(){
        return $this->hasMany(DetailPenerimaan::class, 'id_terima');
    }

    
    static function tambah_id_terima(){
        $data = Penerimaan::create([
            "tgl_terima"=> date("Y-m-d"),
            "status_terima"=> 1,
            "id_sup"=>1,
            "id_user"=>27,
            "total_harga"=>100000,
        ]);
        return $data->id_terima;
      }
}
