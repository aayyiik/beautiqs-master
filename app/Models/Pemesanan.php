<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Pemesanan extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pesan';
    protected $fillable = [
        'id_pesan',
        'id_user',
        'id_sup',
        'tgl_pesan',
        'status_pesan'
    ];

    
    public function user() {
        return $this->belongsTo(Users::class, 'id_user');
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class, 'id_sup');
    }

    public function detail_pemesanan(){
        return $this->hasMany(DetailPemesanan::class, 'id_pesan');
    }

    static function tambah_id_pemesanan(){
      $data = Pemesanan::create([
          "tgl_pesan"=> date("Y-m-d"),
          "status_pesan"=> 0,
          "id_sup"=>1,
          "id_user"=>Auth::user()->id_user,
      ]);
      return $data->id_pesan;
    }

}
