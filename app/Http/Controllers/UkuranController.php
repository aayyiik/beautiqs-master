<?php

namespace App\Http\Controllers;
use App\Models\Ukuran;

use Illuminate\Http\Request;

class UkuranController extends Controller
{  
    public function index() {
        $ukurans = Ukuran::all();
        return view('ukuran.index',['ukurans' => $ukurans]);
    }

    public function create(Request $request){
        $this->validate($request,[
            'ukuran' => 'required|min:1|max:50',
        ]);
        \App\Models\Ukuran::create($request->all());
        return redirect ('/ukuran')->with('sukses','Data Berhasil Diinput'); 
    }
    public function edit ($id_ukuran){
        $ukuran = \App\Models\Ukuran::find($id_ukuran);
        return view('ukuran/edit',['ukuran' => $ukuran]);
    }

    public function update (Request $request,$id_ukuran){
        $ukuran = \App\Models\Ukuran::find($id_ukuran);
        $ukuran->update($request->all());
        return redirect('/ukuran')->with('sukses','Data Berhasil diupdate');
    }

    public function delete ($id_ukuran){
        $ukuran = \App\Models\Ukuran::find($id_ukuran);
        $ukuran->delete($ukuran);
        return redirect('/ukuran')->with('sukses','Data Berhasil dihapus');
    }
}   
