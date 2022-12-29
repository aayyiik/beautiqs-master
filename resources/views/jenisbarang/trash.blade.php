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
                <a class="btn btn-primary" href="/jenisbarang" role="button">Kembali</a>
              </div>
              </div>
              <div class="pull-right">
                </a>
              </div>
              <div class="panel-body">
               <table class="table table-striped">
                <thead>
                  <tr>
                      <th>Id Jenis Barang</th>
                      <th>Jenis Barang</th>
                      <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($jenisbarang as $jenisbarang)
                    <tr>
                        <td>{{ $jenisbarang->id_jb }}</td>
                        <td>{{ $jenisbarang->nama_jb }}</td>
                        <td><a href="/jenisbarang/{{$jenisbarang->id_jb}}/restore" class="btn btn-warning btn-sm">Pulihkan</a>
                            <a href="/jenisbarang/{{$jenisbarang->id_jb}}/forceDelete"class="btn btn-danger btn-sm " 
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

