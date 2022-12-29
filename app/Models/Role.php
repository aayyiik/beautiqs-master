<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes; 
    use HasFactory;
    protected $table = 'role';
    protected $primaryKey = 'id_role';
    protected $fillable = ['id_role','nama_role'];

    public function role(){
        return $this->hasMany(Role::class);
      }
}
