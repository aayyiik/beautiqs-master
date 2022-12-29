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
                <a class="btn btn-primary" href="/supplier" role="button">Kembali</a>
              </div>
              </div>
              <div class="pull-right">
                </a>
              </div>
              <div class="panel-body">
               <table class="table table-striped">
                <thead>
                  <tr>
                      <th>Id Supplier</th>
                      <th>Id Kota</th>
                      <th>Nama Supplier</th>
                      <th>Alamat Supplier</th>
                      <th>Telp Supplier</th>
                      <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($supplier as $supplier)
                    <tr>
                        <td>{{ $supplier->id_sup }}</td>
                        <td>{{ $supplier->id_kota }}</td>
                        <td>{{ $supplier->nama_sup }}</td>
                        <td>{{ $supplier->alamat_sup }}</td>
                        <td>{{ $supplier->telp_sup }}</td>
                        
                        <td><a href="/supplier/{{$supplier->id_sup}}/restore" class="btn btn-warning btn-sm">Pulihkan</a>
                            <a href="/supplier/{{$supplier->id_sup}}/forceDelete"class="btn btn-danger btn-sm " 
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

