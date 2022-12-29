<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\Kota;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {
        $suppliers = Supplier::all();
        $kotas = Kota::all();
        return view('supplier.index',['suppliers' => $suppliers], compact('kotas'));
    }

    public function create(Request $request){
        $this->validate($request,[
            'id_kota' => 'required|min:1|max:5',
            'nama_sup'=>'required',
            'alamat_sup'=>'required|max:100',
            'telp_sup'=>'required|max:16',

        ]);
        \App\Models\Supplier::create($request->all());
        return redirect ('/supplier')->with('sukses','Data Berhasil Diinput'); 
    }
         
    public function edit ($id_sup){
        $supplier = \App\Models\Supplier::find($id_sup);
        return view('supplier.edit',['supplier' => $supplier]);
    }

    public function update (Request $request,$id_sup){

        $supplier = \App\Models\Supplier::find($id_sup);
        $supplier->update($request->all());
        return redirect('/supplier')->with('sukses','Data Berhasil diupdate');
      }

    public function delete ($id_sup){
        $supplier = \App\Models\Supplier::find($id_sup);
        $supplier->delete($supplier);
        return redirect('/supplier')->with('sukses','Data Berhasil dihapus');
    }

    public function trash(){
        $supplier = Supplier::onlyTrashed()->get();
        return view('supplier.trash',['supplier' => $supplier]);
    }

    public function restore($id_sup = null){
        if($id_sup != null){
            $supplier = Supplier::onlyTrashed()
            ->where('id_sup', $id_sup)
            ->restore();
        }
        return redirect('supplier/trash')->with('sukses','Data Berhasil direstore');
    }

    public function forceDelete($id_sup = null){
        if($id_sup != null){
            $supplier = Supplier::onlyTrashed()
            ->where('id_sup', $id_sup)
            ->forceDelete();
        }
        return redirect('supplier/trash')->with('sukses','Data Berhasil dihapus permanen');
    }
}
