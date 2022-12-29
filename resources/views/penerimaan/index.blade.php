@extends('layouts.master') 

@section('content')
<!-- DATA YANG TELAH PENERIMAAN -->
<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h2 class="panel-header">Penerimaan</h2>
                      <div class="right">
                          <a class="fa fa-plus btn btn-success" href="penerimaan/form" role="button">Tambah</a>
                      </div>
                          </div>
                              <div class="panel-body">
                                  <table class="table table-striped" id="datatables">
                                      <thead>
                                          <tr>
                                              <th>ID Penerimaan</th>           
                                              <th>Supplier</th>
                                              <th>User</th>
                                              <th>Tgl Terima</th>
                                              <th>Total Harga</th>
                                              <th>Status Terima</th>
                                              <th>AKSI</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($terima as $tm)
                                          <tr>
                                              <td>{{ $tm->id_terima }}</td>
                                              <td>{{ $tm->supplier->nama_sup }}</td>
                                              <td>{{ $tm->user->nama_user }}</td>
                                              <td>{{ $tm->tgl_terima }}</td>
                                              <td>{{ $tm->total_harga }}</td>
                                              <td><label class="label {{ ($tm->status_terima == 0) ? 'label-success' : 'label-danger'}}">{{ ($tm->status_terima == 0)
                                              ? 'Telah Diterima' : 'Belum Diterima' }}</label>
                                             </td>
                                             <td> <a role="button" href="/pembayaran/{{$tm->id_terima}}/bayar" class="btn btn-warning btn-sm"> <i class="fa fa-money"></i> </a>               
                                             </button>
                                             <a role="button" href="/penerimaan/{{$tm->id_terima}}/detail" class="btn btn-secondary btn-sm"> <i class="fa fa-list"></i> </a>              
                                            </button>
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