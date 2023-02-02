<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailPemesanan;
use App\Models\DetailPenerimaan;
use App\Models\Pemesanan;
use App\Models\Penerimaan;
use App\Models\Supplier;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class PenerimaanController extends Controller
{
    public function index(){

        $terima = Penerimaan::all();
        $suppliers = Supplier::all();
        $user = Users::all();
        return view ('penerimaan.index', ['terima'=> $terima], compact('suppliers','user'));
    }

    public function detail ($id){
        $penerimaan = Penerimaan::find($id);
      
        return view('penerimaan.detail',['penerimaan' => $penerimaan]);
   }

    // public function accept($id_pesan){
    //     $terima = Pemesanan::findOrFail($id_pesan);
    //     $dt = DetailPemesanan::all();
    //     return view('penerimaan/accept',['terima' => $terima],compact('dt'));
    // }

    // public function update (Request $request){
    //     // $detailpesan = \App\Models\DetailPemesanan::where('id_user',Auth::user()->id_user);
    //     $tgl_terima = date('Y-m-d');
    //     $id_terima = $request->id_terima;
    //     $barangs = $request->barangs;
    
    //     //simpan ke database pemesanan
    //     $terima = new Penerimaan();
    //     $terima->tgl_terima = $tgl_terima;
    //     $terima->id_user = Auth::user()->id_user;
    //     $terima->id_sup = 1;
    //     $terima->status_terima = 1;
    //     $terima->id_terima= $id_terima;
    //     $terima->total_harga= 1000000;
    //     $terima->save();

    //     $detailterima = DetailPenerimaan::all();

    //     // \App\Models\Penerimaan::create($request->all());
    //     return redirect('/penerimaan')->with('sukses','Data Berhasil diupdate');
    // }

        public function form(){
            $barangs = Barang::all();
            $users = Users::all();
            $suppliers= Supplier::all();
            
            return view('penerimaan.form',['barangs' => $barangs],compact('users','suppliers','barangs'));
          
    
        }

        public function do_tambah_barang($kode_barang){
            $masuk = session("masuk");
    
            $barangs = Barang::detail_produk($kode_barang);
    
            $masuk[$kode_barang] = [
                "kode_barang" => $barangs->kode_barang,
                "nama_barang" => $barangs->nama_barang,
                "jumlah_his" =>1,
                "harga_his" =>100000,
                "subtotal" =>1000000
             
            ];
    
            
            session(["masuk" => $masuk]);
            return redirect("/penerimaan/form");
    
        }
    
       public function masuk(){
           $barangs= Barang::all();
           $users = Users::all();
           $suppliers= Supplier::all();
            $masuk = session("masuk");
            return view("penerimaan.form",['barangs'=>$barangs], compact('users','suppliers'))->with('masuk',$masuk);
              
          
        }
    
        public function hapus($kode_barang){
            $masuk = session("masuk");
            unset($masuk[$kode_barang]);
            session(["masuk"=>$masuk]);
    
            return redirect("/penerimaan/form");
        }
    
        public function do_act_barang (){
            $masuk = session("masuk");
    
            $id_terima = Penerimaan::tambah_id_terima();
            foreach($masuk as $ct=>$val){
                $kode_barang= $ct;
                $jumlah_his = $val["jumlah_his"];
                $harga_his = $val["harga_his"];
                $subtotal = $val["subtotal"];
                DetailPenerimaan::tambah_id_detail($kode_barang, $id_terima, $harga_his, $jumlah_his, $subtotal);
    
            }
            session()->forget("masuk");
            return redirect("/penerimaan/form");
        }

        public function approved($id_terima){
            Penerimaan::where('id_terima',$id_terima)->update([
                'status_terima'=>1
               
            ]);
            return redirect('/penerimaan');
            
        }
}