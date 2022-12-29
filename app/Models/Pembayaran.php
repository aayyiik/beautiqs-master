<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_bayar';
    protected $fillable = ['id_terima','id_bayar','tgl_bayar','total_bayar','bukti'];

    public function penerimaan()
    {
        return $this->hasOne(Penerimaan::class, 'id_terima');
    }
}
