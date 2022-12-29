@extends('layouts.master') 
@section('content')

<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-header">Pembayaran</h3>
              
                        <form action="/pembayaran/{{$data->id_terima}}/proses" method="POST" enctype="multipart/form-data">
                         {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">id terima</label>
                            <input type="integer" name="id_terima"  class="form-control" value="{{$data->id_terima}}"placeholder="Enter email" readonly>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tgl Bayar</label>
                            <input type="date" name="tgl_bayar" class="form-control"  placeholder="tgl">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Total Bayar</label>
                            <input type="integer" name="total_bayar" class="form-control"  placeholder="total bayar">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bukti Bayar</label>
                            <input type="file" name ="bukti" class="form-control"  placeholder="tgl">
                        </div>
                        <button type="submit" class="btn btn-sm"><i class="fa fa-pencil-square-o"></i>Update</button>
                   
                        </form>
          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection