@extends('layouts/master')

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Users</h3>
                 @if(session('sukses'))
                  <div class="alert alert-success" role="alert">
                   {{session ('sukses')}}
                  </div>
                 @endif
                  <div class = 'row'>

                <form action="/users/{{$users->id_user}}/update" method="POST">
                      
                  {{csrf_field()}}

                     <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Nama User</label>
                        <input name="nama_user" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama User" value="{{ $users->nama_user }}">
                     </div>

                     <div class="from-group">
                      <label for="formGroupExampleInput" class="form-label">Asal Kota</label>
                      <input name="id_kota" type="integer" class="form-control" id="formGroupExampleInput" placeholder="Kota" value="{{ $users->id_kota }}">
                   </div>

                   <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Peran</label>
                      <input name="id_role" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="Role" value="{{ $users->id_role}}">
                    </div>

                     <div class="mb-3">
                          <label for="formGroupExampleInput2" class="form-label">Alamat</label>
                          <input name="alamat" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat" value="{{ $users->alamat}}">
                      </div>
                      
                      <div class="mb-3">
                          <label for="formGroupExampleInput2" class="form-label">No Telp</label>
                          <input name="telp" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Telp" value="{{ $users->telp}}">
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="formGroupExampleInput2" placeholder="Telp" value="{{ $users->email}}">
                      </div>

                      <button type="submit" class="btn btn-sm"><i class="fa fa-pencil"></i>Submit</button>
                      
        </form>
    </div>
  </div>
@endsection



 
      

