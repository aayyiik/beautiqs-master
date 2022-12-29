<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(){
        $data = Pembayaran::all();
        return view ('pembayaran.index', compact('data'));
    }

    public function create($id_terima){
        $data = \App\Models\Penerimaan::find($id_terima);
        return view('pembayaran.form',['data' => $data]);
    }

    public function proses(Request $request, $id_terima){
        $data = \App\Models\Pembayaran::find($id_terima);

        // $file = $request->file('bukti');
        // if($file){
        //     $nama_file = date('Y-m-d H:i:s');
        //     $file->move('bukti_files',$nama_file);
        //     $data['bukti'] = 'bukti_files/'.$nama_file;

        // }
        // if ($request->img) {
        //     $file = $request->File('bukti');
        //     $ext  = $date->username . "." . $file->clientExtension();
        //     $file->storeAs('images/', $ext);
        //     $data->image_name = $ext;
        // }

        $file = $request->bukti;
        $nama_file = $file->getClientOriginalName();
        $file->move("img/",$nama_file);

        $data['id_terima']=$request->id_terima;
        $data['tgl_bayar']=$request->tgl_bayar;
        $data['total_bayar']=$request->total_bayar;
        $data['bukti']=$request->bukti;

        Pembayaran::create($data);
        // $data->insert($request->all());
        return redirect('/pembayaran')->with('sukses','Pesanan berhasil dibayar');
      
    }
}
