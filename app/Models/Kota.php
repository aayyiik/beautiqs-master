<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kota extends Model
{
    use SoftDeletes;
    //use HasFactory;
    protected $table = 'kota';
    protected $primaryKey = 'id_kota';
    protected $fillable = ['id_kota','nama_kota'];

    //public function supplier()
   // {
   //     return $this->hasMany(Supplier::class);
  //  }
  public function supplier(){
    return $this->hasMany(Supplier::class);
  }

  public function users(){
    return $this->hasMany(Users::class);
  }
 
}
