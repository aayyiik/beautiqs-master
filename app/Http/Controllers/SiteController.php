<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Kota;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
//masih belum siap
//simpan
class SiteController extends Controller
{
  public function home(){
    return view('sites.home');
  }
    public function register(){
        $users = Users::all();
        $kotas = Kota::all();
        $roles = Role::all();
        return view('sites.register',compact('users','kotas','roles'));
    }

    public function postregister(Request $request){
     
        Users::create([

            'id_kota' => request('id_kota'),
            'id_role' => 1,
            'nama_user' => request('nama_user'),
            'alamat' => request('alamat'),
            'telp' => request('telp'),
            'email' => request('email'),    
            'password'=>bcrypt($request->password),
            'remember_token' => Str::random(10),
       ]);
      
      return redirect ('/login')->with('sukses','Data Berhasil Diinput');
    }
}
