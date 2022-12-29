<?php

namespace App\Http\Controllers;
use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
use App\Models\Users;
use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        $pemesanan = Pemesanan::all();
        $users = Users::all();
        // $suppliers= Supplier::all();
        $suppliers= Supplier::orderBy('nama_sup')->get();
        return view('pemesanan.index',['pemesanan' => $pemesanan], compact('users','suppliers'));
    }

    // public function add(){

    //     $pemesanan = Pemesanan::all();
    //     $id_pesan = rand();
    //     $suppliers = Supplier::orderBy('nama_sup','asc')->get();
    //     $barangs = Barang::orderBY('nama_barang','asc')->get();
    //     return view ('pemesanan.add', compact ('pemesanan','id_pesan','suppliers','barangs'));
    // }

    // public function getbarang($kode_barang){
    //     $pemesanan = Pemesanan::all();
    //     $id_pesan = rand();
    //     $suppliers = Supplier::orderBy('nama_sup','asc')->get();
    //     $barangs = Barang::orderBY('kode_barang','nama_barang','asc')->get();
    //     return view ('pemesanan.add', compact ('pemesanan','id_pesan','suppliers','barangs'));
    // }

    public function approved($id_pesan){
        Pemesanan::where('id_pesan',$id_pesan)->update([
            'status_pesan'=>1

           
        ]);
        return redirect('/pemesanan')->with('sukses','Data Telah DiProses');
        
    }

    public function detail($id){
        $pemesanan = Pemesanan::find($id);
      
        return view('pemesanan.detail',['pemesanan' => $pemesanan]);
    }



   
    public function form(){
        $barangs = Barang::all();
        $users = Users::all();
        $suppliers= Supplier::all();
        
        return view('pemesanan.form',['barangs' => $barangs],compact('users','suppliers','barangs'));
      

    }

    
      
    public function do_tambah_cart($kode_barang){
        $cart = session("cart");

        $barangs = Barang::detail_produk($kode_barang);

        $cart[$kode_barang] = [
            "kode_barang" => $barangs->kode_barang,
            "nama_barang" => $barangs->nama_barang,
            "jumlah_up" =>1,
            "harga_beli_barang" => $barangs->harga_beli_barang,
            "harga_up" =>1000000
         
        ];

        
        session(["cart" => $cart]);
        return redirect("/pemesanan/form");

    }

   public function cart(){
       $barangs= Barang::all();
       $users= Users::all();
       $suppliers= Supplier::all();
        $cart = session("cart");
        return view("pemesanan.form",['barangs'=>$barangs], compact('users','suppliers'))->with('cart',$cart);
          
      
    }

    public function hapus($kode_barang){
        $cart = session("cart");
        unset($cart[$kode_barang]);
        session(["cart"=>$cart]);

        return redirect("/pemesanan/form");
    }

    public function do_tambah_pesan (){
        $cart = session("cart");

        $id_pesan = Pemesanan::tambah_id_pemesanan();
        foreach($cart as $ct=>$val){
            $kode_barang= $ct;
            $jumlah_up = $val["jumlah_up"];
            $harga_up = $val["harga_up"];
            DetailPemesanan::tambah_id_detail($kode_barang,$id_pesan,$jumlah_up,$harga_up);

        }
        session()->forget("cart");
        return redirect("/pemesanan/form");
    }

}
