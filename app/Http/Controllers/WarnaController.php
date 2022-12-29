<?php

namespace App\Http\Controllers;
use App\Models\Warna;

use Illuminate\Http\Request;

class WarnaController extends Controller
{
    public function index() {
        $warnas = Warna::all();
        return view('warna.index',['warnas' => $warnas]);
    }

    public function create(Request $request){
        $this->validate($request,[
            'warna' => 'required|min:1|max:50',
        ]);
        \App\Models\Warna::create($request->all());
        return redirect ('/warna')->with('sukses','Data Berhasil Diinput'); 
    }

    public function edit ($id_warna){
        $warna = \App\Models\Warna::find($id_warna);
         return view('warna/edit',['warna' => $warna]);
    }

    public function update (Request $request,$id_warna){
      $warna = \App\Models\Warna::find($id_warna);
        $warna->update($request->all());
        return redirect('/warna')->with('sukses','Data Berhasil diupdate');
    }

    public function delete ($id_warna){
        $warna = \App\Models\Warna::find($id_warna);
        $warna->delete($warna);
        return redirect('/warna')->with('sukses','Data Berhasil dihapus');
    }

}
