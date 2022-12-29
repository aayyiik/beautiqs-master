@extends('layouts.master')
@section('content')
    
<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Detail</h3>
                    <table class="table">
                          <tbody>
                                <tr>
                                    <th>kode barang </th>
                                    <th>:</th>
                                    <td>{{ $barangs->kode_barang}}</td>

                                    <th> Barang </th>
                                    <th>:</th>
                                    <td>{{ $barangs->nama_barang }}</td>
                                  
                                </tr>

                                <tr>
                                  <th> Harga Jual </th>
                                  <th>:</th>
                                  <td>{{ $barangs->harga_jual_barang }}</td>

                                  <th> Harga Beli </th>
                                  <th>:</th>
                                  <td>{{ $barangs->harga_beli_barang }}</td>

             
                                <tr>
                                  <th> Stok </th>
                                  <th>:</th>
                                  <td>{{ $barangs->stok }}</td>

                                  <th>TANGGAL DIBUAT</th>
                                  <th>:</th>
                                  <td>{{ $barangs->created_at }}</td>

                              </tr>
                            </tbody>
                        </div>
                      </div>
                    </div>
                </div>
  
               
                <div class="row">
                  <div class="col-md-12">
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">warna</th>
                        <th scope="col">size</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($barangs->detail_barang as $ln)
                    <tr>
                      <td>x</td>
                      <td>{{ $ln->warna->warna }}</td>
                      <td>{{ $ln->ukuran->ukuran }}</td>
                      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
    
              </div>
          </div>
    </div>
    </div>
</div>


@endsection