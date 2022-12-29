<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;

use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    public function index() {
        // $jenisbarangs = JenisBarang::paginate(10);
        $jenisbarangs = JenisBarang::all();
        return view('jenisbarang.index',['jenisbarangs'=>$jenisbarangs]);
}
public function create (Request $request){
    $this->validate($request,[
        'nama_jb' => 'required|min:1|max:50',
    ]);
    \App\Models\JenisBarang::create($request->all());
    return redirect ('/jenisbarang')->with('sukses','Data Berhasil Diinput');

}

public function edit ($id_jb){
    $jenisbarang = \App\Models\JenisBarang::find($id_jb);
    return view('jenisbarang/edit',['jenisbarang' => $jenisbarang]);
}

public function update (Request $request,$id_jb){
    $jenisbarang = \App\Models\JenisBarang::find($id_jb);
    $jenisbarang->update($request->all());
    return redirect('/jenisbarang')->with('sukses','Data Berhasil diupdate');
}

public function delete ($id_jb){
    $jenisbarang = \App\Models\JenisBarang::find($id_jb);
    $jenisbarang->delete($jenisbarang);
    return redirect('/jenisbarang')->with('sukses','Data Berhasil dihapus');
}

public function trash(){
    $jenisbarang = JenisBarang::onlyTrashed()->get();
    return view('jenisbarang.trash',['jenisbarang' => $jenisbarang]);
}

public function restore($id_jb = null){
    if($id_jb != null){
        $jenisbarang = JenisBarang::onlyTrashed()
        ->where('id_jb', $id_jb)
        ->restore();
    }
    return redirect('jenisbarang/trash')->with('sukses','Data Berhasil direstore');
}

public function forceDelete($id_jb = null){
    if($id_jb != null){
        $jenisbarang = JenisBarang::onlyTrashed()
        ->where('id_jjb', $id_jb)
        ->forceDelete();
    }
    return redirect('jenisbarang/trash')->with('sukses','Data Berhasil dihapus permanen');
}



}
