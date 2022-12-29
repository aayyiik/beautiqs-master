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
                <a class="btn btn-primary" href="/users" role="button">Kembali</a>
              </div>
              </div>
              <div class="pull-right">
                </a>
              </div>
              <div class="panel-body">
               <table class="table table-striped">
                <thead>
                  <tr>
                      <th>Kota</th>
                      <th>Role</th>
                      <th>Nama User</th>
                      <th>Alamat User</th>
                      <th>Telp User</th>
                      <th>Email User</th>
                      <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($user as $usr)
                    <tr>
                        <td>{{ $usr->id_kota }}</td>
                        <td>{{ $usr->id_role }}</td>
                        <td>{{ $usr->nama_user }}</td>
                        <td>{{ $usr->alamat }}</td>
                        <td>{{ $usr->telp }}</td>
                        <td>{{ $usr->email }}</td>
                        
                        <td><a href="/users/{{$usr->id_user}}/restore" class="btn btn-warning btn-sm">Pulihkan</a>
                            <a href="/users/{{$usr->id_user}}/forceDelete"class="btn btn-danger btn-sm " 
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

