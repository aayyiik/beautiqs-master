@extends('layouts.master') 

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-header">Data Ukuran</h3>
              <div class="right">
                <a class="fa fa-plus btn btn-success" data-toggle="modal" data-target="#exampleModal" href="" role="button">Tambah</a>
              </div>
              </div>
              <div class="panel-body">
               <table class="table table-striped" id="datatables">
                <thead>
                  <tr>
                    <th>ID Ukuran</th>
                    <th>Ukuran</th>
                    <th> AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($ukurans as $ukuran)
                    <tr>
                        <td>{{ $ukuran->id_ukuran }}</td>
                        <td>{{ $ukuran->ukuran }}</td>
                        <td><a href="/ukuran/{{$ukuran->id_ukuran}}/edit" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/ukuran/{{$ukuran->ukuran}}/delete"class="btn btn-danger btn-sm " 
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Ukuran</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
                  </div>
                <div class="modal-body">
              <form action="/ukuran/create" method="GET">
                {{csrf_field()}}
                <div class="from-group {{$errors->has('ukuran') ? 'has-error' : ''}}">
                  <label for="formGroupExampleInput" class="form-label">Size Ukuran</label>
                  <input name="ukuran" type="text" class="form-control" id="formGroupExampleInput" 
                  placeholder="Ukuran" value = "{{ old ('ukuran') }}">
                  @if($errors->has('ukuran') )
                  <span class="help-block">{{ $errors->first('ukuran') }}</span>
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


