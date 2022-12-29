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
                              <th>ID PEMESANAN </th>
                              <th>:</th>
                              <td>{{ $pemesanan->id_pesan }}</td>

                              <th> STATUS PEMESANAN </th>
                              <th>:</th>
                              <td><label class="label {{ ($pemesanan->status_pesan == 1) ? 'label-success' : 'label-danger'}}">{{ ($pemesanan->status_pesan == 1)
                                ? 'Telah Diproses' : 'Belum Diproses' }}</label></td>
                            
                          </tr>

                          <tr>
                            <th> ID PEGAWAI </th>
                            <th>:</th>
                            <td>{{ $pemesanan->user->nama_user }}</td>

                            <th> ID SUPPLIER </th>
                            <th>:</th>
                            <td>{{ $pemesanan->supplier->nama_sup }}</td>

                          </tr>

                          <tr>
                            <th>TANGGAL DIBUAT</th>
                            <th>:</th>
                            <td>{{ $pemesanan->tgl_pesan }}</td>

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
                    <th scope="col">Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pemesanan->detail_pemesanan as $ln)
                <tr>
                  <td>x</td>
                  <td>{{ $ln->barang->nama_barang }}</td>
                  <td>{{ $ln->jumlah_up }}</td>
                  <td>{{ $ln->harga_up }}</td>
                  <td>Alhamdulillah</td>
                </tr>
                @endforeach
              </tbody>
            </table>

          </div>
      </div>
</div>
          


                 
@stop