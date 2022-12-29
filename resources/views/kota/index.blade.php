@extends('layouts.master') 

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h2 class="panel-header">Data Kota</h2>
              <div class="right">
                <a class="fa fa-plus btn btn-success" data-toggle="modal" data-target="#exampleModal" href="" role="button">Tambah</a>
                <a class="fa fa-trash btn btn-info" href="kota/trash" role="button">Sampah</a>
              </div>
              </div>
              <div class="panel-body">
               <table class="table table-striped" id="datatables">
                <thead>
                  <tr>
                      <th>ID Kota</th>
                      <th>Kota</th>
                      <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($kotas as $kota)
                    <tr>
                        <td>{{ $kota->id_kota }}</td>
                        <td>{{ $kota->nama_kota }}</td>
                        <td><a href="/kota/{{$kota->id_kota}}/edit" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/kota/{{$kota->id_kota}}/delete"class="btn btn-danger btn-sm " 
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
        <h5 class="modal-title" id="exampleModalLabel">Barang Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="/kota/create" method="GET">
           {{csrf_field()}}
                <div class="from-group {{ $errors->has('nama_kota') ? 'has-error' : '' }}">
                  <label for="formGroupExampleInput" class="form-label">Nama Kota</label>
                  <input name="nama_kota" type="integer" class="form-control" id="formGroupExampleInput2" 
                  placeholder="nama kota" value="{{ old('nama_kota') }}">
                @if($errors->has('nama_kota') )
                  <span class="help-block">{{ $errors->first('nama_kota') }}</span>
                @endif
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-primary" type="submit" value="Submit">
      </div>
    </div>
  </div>
</div>  
@stop

