<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\HistoryStok;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HistoryStokController extends Controller
{
    public function index(){
        $histori = HistoryStok::all();
        $barangs = Barang::all();
        return view('histori_stok.index',['histori' => $histori], compact('barangs'));
      
    }

    public function create (Request $request){

        \App\Models\HistoryStok::create($request->all());
     

        $barangs = Barang::findOrFail($request->kode_barang);
        $barangs->stok += $request->stok_masuk;
        $barangs->save();
        return redirect ('/history_stok')->with('sukses','Data Berhasil Diinput');
       
    }

  
    public function delete ($id_his){
        $histori = \App\Models\HistoryStok::find($id_his);
        $histori->delete($histori);
        return redirect('/history_stok')->with('sukses','Data Berhasil dihapus');
    }

    public function approved($id_his){
        HistoryStok::where('id_his',$id_his)->update([
            'status_pesan'=>0

           
        ]);
        return redirect('/history_stok')->with('sukses','Data Telah DiProses');
        
    }
}
