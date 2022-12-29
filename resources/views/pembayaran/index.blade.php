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
                </div>
                <div class="panel-body">
                 <table class="table table-striped" id="datatables">
                  <thead>
                    <tr>
                        <th>ID Pembayaran</th>
                         <th>TGL Bayar</th>
                        <th>Total Bayar</th>
                        <th>Bukti Pembayaran</th>
       
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($data as $byr)
                      <tr>
                        
                          <td>{{ $byr->id_bayar }}</td>
                          <td>{{ $byr->tgl_bayar }}</td>
                          <td>{{ $byr->total_bayar }}</td>
                          <td>{{$byr->bukti}}</td>
                          
                      
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