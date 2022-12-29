<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() {
        $roles = Role::paginate(10);
        return view('role.index',['roles' => $roles]);
    }

    public function create(Request $request){
        $this->validate($request,[
            'nama_role' => 'required|min:1|max:50',
        ]);
        \App\Models\Role::create($request->all());
        return redirect ('/role')->with('sukses','Data Berhasil Diinput'); 
    }

    public function edit ($id_role){
        $role = \App\Models\Role::find($id_role);
        return view('role/edit',['role' => $role]);
    }

    public function update (Request $request,$id_role){
        $role = \App\Models\Role::find($id_role);
        $role->update($request->all());
        return redirect('/role')->with('sukses','Data Berhasil diupdate');
    }

    public function delete ($id_role){
        $role = \App\Models\Role::find($id_role);
        $role->delete($role);
        return redirect('/role')->with('sukses','Data Berhasil dihapus');
    }

    public function trash(){
        $role = Role::onlyTrashed()->get();
        return view('role.trash',['role' => $role]);
    }

    public function restore($id_role = null){
        if($id_role != null){
            $role = Role::onlyTrashed()
            ->where('id_role', $id_role)
            ->restore();
        }
        return redirect('role/trash')->with('sukses','Data Berhasil direstore');
    }

    public function forceDelete($id_role = null){
        if($id_role != null){
            $role = Role::onlyTrashed()
            ->where('id_role', $id_role)
            ->forceDelete();
        }
        return redirect('role/trash')->with('sukses','Data Berhasil dihapus permanen');
    }

}
