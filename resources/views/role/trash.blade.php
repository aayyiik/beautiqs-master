@extends('layouts.master') 

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Keranjang Sampah</h3>
              <div class="right">
                <a class="btn btn-primary" href="/role" role="button">Kembali</a>
              </div>
              </div>
              <div class="pull-right">
                </a>
              </div>
              <div class="panel-body">
               <table class="table table-striped">
                <thead>
                  <tr>
                      <th>Id Role</th>
                      <th>Role User</th>
                      <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($role as $role)
                    <tr>
                        <td>{{ $role->id_role }}</td>
                        <td>{{ $role->jenis_role }}</td>
                        
                        <td><a href="/role/{{$role->id_role}}/restore" class="btn btn-warning btn-sm">Pulihkan</a>
                            <a href="/role/{{$role->id_role}}/forceDelete"class="btn btn-danger btn-sm " 
                            onclick="return confirm ('Data akan dihapus permanen ?')">Hapus</a>
                            
                      </td>                      
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@stop

