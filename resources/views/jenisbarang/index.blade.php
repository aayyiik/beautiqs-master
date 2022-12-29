@extends('layouts.master') 

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Data Jenis Barang</h3>
              <div class="right">
                <a class="fa fa-plus btn btn-success" data-toggle="modal" data-target="#exampleModal" href="" role="button">Tambah</a>
                <a class="fa fa-trash btn btn-info" href="jenisbarang/trash" role="button">Sampah</a>
              </div>
              </div>
              <div class="panel-body">
               <table class="table table-striped" id="datatables">
                <thead>
                  <tr>
                      <th>ID Jenis Barang</th>
                      <th>Jenis Barang</th>
                      <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($jenisbarangs as $jenisbarang)
                    <tr>
                        <td>{{ $jenisbarang->id_jb }}</td>
                        <td>{{ $jenisbarang->nama_jb }}</td>
                        <td><a href="/jenisbarang/{{$jenisbarang->id_jb}}/edit" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/jenisbarang/{{$jenisbarang->id_jb}}/delete"class="btn btn-danger btn-sm " 
                            onclick="return confirm ('Yakin mau dihapus ?')">Hapus</a>                    
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
        <h5 class="modal-title" id="exampleModalLabel">Jenis Barang Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="/jenisbarang/create" method="GET">
           {{csrf_field()}}
                <div class="from-group {{ $errors->has('nama_jb') ? 'has-error' : '' }}">
                  <label for="formGroupExampleInput1" class="form-label">Jenis Barang</label>
                  <input name="nama_jb" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="Jenis Barang" value="{{ old('nama_jb') }}">
                  @if($errors->has('nama_jb') )
                  <span class="help-block">{{ $errors->first('nama_jb') }}</span>
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


