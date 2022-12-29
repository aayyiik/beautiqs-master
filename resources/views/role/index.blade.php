@extends('layouts.master') 

@section('content')

<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-header">Data Role User</h3>
                <div class="right">
                  <a class="fa fa-plus btn btn-success" data-toggle="modal" data-target="#exampleModal" href="" role="button">Tambah</a>
                  <a class="fa fa-trash btn btn-info" href="role/trash" role="button">Sampah</a>
                </div> 
                </div>
                <div class="panel-body">
                 <table class="table table-striped" id="datatables">
                  <thead>
                    <tr>
                        <th>ID Role</th>
                        <th>Role</th>
                        <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($roles as $role)
                      <tr>
                          <td>{{ $role->id_role }}</td>
                          <td>{{ $role->nama_role }}</td>
                          <td><a href="/role/{{$role->id_role}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/role/{{$role->id_role}}/delete"class="btn btn-danger btn-sm " 
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
          <h5 class="modal-title" id="exampleModalLabel">Role Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/role/create" method="GET">
             {{csrf_field()}}
                  <div class="from-group {{ $errors->has('nama_role') ? 'has-error' : '' }}">
                    <label for="formGroupExampleInput" class="form-label">jenis Role</label>
                    <input name="nama_role" type="text" class="form-control" id="formGroupExampleInput" placeholder="Jenis Role">
                    @if($errors->has('nama_role') )
                    <span class="help-block">{{ $errors->first('nama_role') }}</span>
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
