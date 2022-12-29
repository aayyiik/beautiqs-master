<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Authenticatable {
    
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'id_kota',
        'id_role',
        'nama_user',
        'alamat',
        'telp',
        'email',
        'password',
        'remember_token'
       
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function kota() {
        return $this->belongsTo(Kota::class, 'id_kota');
    }

    public function role() {
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function pemesanan() {
        return $this->hasMany(Pemesanan::class, 'id_pesan');
    }
    
    public function penerimaan() {
        return $this->hasMany(Penerimaan::class, 'id_pesan');
    }
}
