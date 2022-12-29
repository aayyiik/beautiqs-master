@extends('layouts/master')

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Role</h3>
                 @if(session('sukses'))
                  <div class="alert alert-success" role="alert">
                   {{session ('sukses')}}
                  </div>
                 @endif
                  <div class = 'row'>

                <form action="/role/{{$role->id_role}}/update" method="POST">
                      
                  {{csrf_field()}}
                     <div class="from-group">
                       <label for="formGroupExampleInput" class="form-label">ID Role</label>
                       <input name="id_role" type="inteeger" class="form-control" id="formGroupExampleInput" placeholder="Id_role" value="{{ $role->id_role }}">
                     </div>
                     
                     <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Jenis Role</label>
                      <input name="nama_role" type="text" class="form-control" id="formGroupExampleInput2" placeholder="jenis_role" value="{{ $role->nama_role}}">
                     </div>
                     <button type="submit" class="btn btn-sm"><i class="fa fa-pencil"></i>Submit</button>
        </form>
    </div>
  </div>
@endsection



 
      

