@extends('layouts.master') 

@section('content')
<!-- DATA YANG TELAH PEMESANAN -->
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h2 class="panel-header">Transaksi Pemesanan</h2>
                    <div class="right">
                    
                        <a class="fa fa-plus btn btn-success" href="pemesanan/form" role="button">Add Form</a>
                    </div>
                        </div>
                            <div class="panel-body">
                                <table class="table table-striped" id=datatables>
                                    <thead>
                                        <tr>
                                            <th>ID Pesan</th>           
                                            <th>Tgl Pesan</th>
                                            <th>Nama Pemesan</th>
                                            <th>Supplier</th>
                                            <th>Status</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pemesanan as $ps)
                                        <tr>
                                            <td>{{ $ps->id_pesan }}</td>
                                            <td>{{ $ps->tgl_pesan }}</td>
                                            <td>{{ $ps->user->nama_user }}</td>
                                            <td>{{ $ps->supplier->nama_sup }}</td>
                                            <td><label class="label {{ ($ps->status_pesan == 1) ? 'label-success' : 'label-danger'}}">{{ ($ps->status_pesan == 1)
                                            ? 'Telah Diproses' : 'Belum Diproses' }}</label></td>
                                            <td>      
                                                <a role="button "href="/pemesanan/approved/{{ $ps->id_pesan }}"  class="btn btn-primary btn-sm">
                                                <i class="fa fa-paint-brush"></i> 
                                                </a>              
                                                <a role="button" href="/pemesanan/detail/{{ $ps->id_pesan }}"  class="btn btn-danger btn-sm">
                                                <i class="fa fa-list"></i> 
                                                </a> 
                                            </td>
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
