<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\DetailBarang;
use App\Models\JenisBarang;
use Illuminate\Http\Request;
use App\Models\Ukuran;
use App\Models\Warna;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index() {
        $barangs=Barang::all();
        // $barangs = Barang::paginate(10);
        $warna=Warna::all();
        $list_ukuran=Ukuran::all();
        $jenisbarangs = JenisBarang::all();
        return view('barang.index',['barangs' => $barangs], compact('jenisbarangs','warna','list_ukuran'));
    }

   
    public function create (Request $request){
        $this->validate($request,[
            'nama_barang' => 'required|max:100',
            'id_jb' => 'required',
            'stok' => 'required',
            'harga_beli_barang' => 'required',
            'harga_jual_barang' => 'required',
        ]);

      
    //   \App\Models\Barang::create($request->all());
   

    $data = $request->all();
    $barangs = new Barang;
    $barangs->nama_barang = $data['nama_barang'];
    $barangs->id_jb = $data['id_jb'];
    $barangs->stok = $data['stok'];
    $barangs->harga_beli_barang = $data['harga_beli_barang'];
    $barangs->harga_jual_barang = $data['harga_jual_barang'];
    $barangs->save();

 
    if(count($request->id_ukuran) > 0){
        foreach($data['id_ukuran'] as $item =>$value){
            $data2 = array(
                'kode_barang' => $barangs->kode_barang,
                'id_warna'=> $data['id_warna'],
                'id_ukuran'=> $data['id_ukuran'][$item],
                // 'id_warna'=> $data['id_warna'][$item]
            );
            DetailBarang::create($data2);
        }
    }
   

      return redirect('/barang');

  }

   
  public function edit ($kode_barang){
      $barang = \App\Models\Barang::find($kode_barang);
      return view('barang/edit',['barang' => $barang]);
  }

  public function update (Request $request,$kode_barang){
      $barang = \App\Models\Barang::find($kode_barang);
      $barang->update($request->all());
      return redirect('/barang')->with('sukses','Data Berhasil diupdate');
  }

  public function delete ($kode_barang){
      $barang = \App\Models\Barang::find($kode_barang);
      $barang->delete($barang);
      return redirect('/barang')->with('sukses','Data Berhasil dihapus');
  }

  public function trash(){
    $barang = Barang::onlyTrashed()->get();
    return view('barang.trash',['barang' => $barang]);
}

public function restore($kode_barang = null){
    if($kode_barang != null){
        $barang = Barang::onlyTrashed()
        ->where('kode_barang', $kode_barang)
        ->restore();
    }
    return redirect('barang/trash')->with('sukses','Data Berhasil direstore');
}

public function forceDelete($kode_barang = null){
    if($kode_barang != null){
        $barang = Barang::onlyTrashed()
        ->where('kode_barang', $kode_barang)
        ->forceDelete();
    }
    return redirect('barang/trash')->with('sukses','Data Berhasil dihapus permanen');
}


    public function detail($id){

        $barangs = Barang::find($id);
            return view('barang.detail', ['barangs'=>$barangs]);
        
    }
    
}
