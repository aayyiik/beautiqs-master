@extends('layouts.master')
@section('content')
    
<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-header">Histori Stok</h3>
                  <div class="right">
                     <a class="fa fa-plus btn btn-success" data-toggle="modal" data-target="#exampleModal" href="" role="button">Tambah</a>   
                  </div>
                </div>
                  <div class="panel-body">
                    <table class="table table-striped" id="datatables">
                      <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Barang</th>
                                <th>Tgl Histori</th>
                                <th>Stok Masuk</th>
                                <th>Status</th>
                                <th> AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($histori as $his)
                            <tr>
                                <td>{{ $his->id_his }}</td>                         
                                <td>{{ $his->barang->nama_barang }}</td>
                                <td>{{ $his->tgl_his }}</td>
                                <td>{{ $his->stok_masuk }}</td>
                                <td><label class="label {{ ($his->status_stok == 1) ? 'label-success' : 'label-danger'}}">{{ ($his->status_stok == 1)
                                  ? 'Telah Diproses' : 'Belum Diproses' }}</label></td>

                                <td>  
                                    <a href="/history_stok/{{ $his->id_his }}/delete"class="btn btn-danger btn-sm" 
                                    onclick="return confirm ('Yakin mau dihapus ?')">Hapus</a> 
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Stok Update</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/history_stok/create" method="GET">
             {{csrf_field()}}
                <div class="from-group {{ $errors->has('kode_barang') ? 'has-error' : '' }}">
                    <label for="formGroupExampleInput1" class="form-label">Barang</label>
                    <select name="kode_barang" class="form-control">
                          <option value="">- Pilih -</option>
                        @foreach ($barangs as $br)
                          <option value="{{ $br->kode_barang }}">{{ $br->nama_barang }}</option>
                        @endforeach                      
                   </select>                   
                      @if($errors->has('kode_barang') )
                      <span class="help-block">{{ $errors->first('kode_barang') }}</span>
                      @endif
                </div>

                <div class="from-group {{ $errors->has('tgl_his') ? 'has-error' : '' }}">
                    <label for="formGroupExampleInput2" class="form-label">Tanggal</label>
                    <input name = "tgl_his" type="date" class="form-control" id="formGroupExampleInput2" placeholder="Tanggal">
                    @if($errors->has('tgl_his') )
                    <span class="help-block">{{ $errors->first('tgl_his') }}</span>
                    @endif
                  </div>
                  
                    
                  <div class="from-group {{ $errors->has('stok_masuk') ? 'has-error' : '' }}">
                    <label for="formGroupExampleInput" class="form-label">Stok Barang</label>
                    <input name="stok_masuk" type="integer" class="form-control" id="formGroupExampleInput" placeholder="Stok">
                    @if($errors->has('stok_masuk') )
                    <span class="help-block">{{ $errors->first('stok_masuk') }}</span>
                    @endif
                  </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input class="btn btn-primary" type="submit" value="Submit">
        </div>
        </form>
        </div>
      </div>
    </div>
  
  

@endsection