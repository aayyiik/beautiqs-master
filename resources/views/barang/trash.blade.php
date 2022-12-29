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
                <a class="btn btn-primary" href="/barang" role="button">Kembali</a>
              </div>
              </div>
              <div class="pull-right">
                </a>
              </div>
              <div class="panel-body">
               <table class="table table-striped">
                <thead>
                  <tr>
                      <th>Kode Barang</th>
                      <th>Id Jenis Barang</th>
                      <th>Nama Barang</th>
                      <th>Stok</th>
                      <th>Harga Beli Barang</th>
                      <th>Harga Jual Barang</th>
                      <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($barang as $barang)
                    <tr>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->jenis_barang->nama_jb }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->stok }}</td>
                        <td>{{ $barang->harga_beli_barang }}</td>
                        <td>{{ $barang->harga_jual_barang }}</td>
                        
                        <td><a href="/barang/{{$barang->kode_barang}}/restore" class="btn btn-warning btn-sm">Pulihkan</a>
                            <a href="/barang/{{$barang->kode_barang}}/forceDelete"class="btn btn-danger btn-sm " 
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

