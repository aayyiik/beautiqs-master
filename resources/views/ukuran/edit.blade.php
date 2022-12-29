@extends('layouts/master')

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Ukuran</h3>
                 @if(session('sukses'))
                  <div class="alert alert-success" role="alert">
                   {{session ('sukses')}}
                  </div>
                 @endif
                  <div class = 'row'>

                <form action="/ukuran/{{$ukuran->id_ukuran}}/update" method="POST">
                      
                  {{csrf_field()}}
                     <div class="from-group">
                       <label for="formGroupExampleInput" class="form-label">ID Ukuran</label>
                       <input name="id_ukuran" type="inteeger" class="form-control" id="formGroupExampleInput" placeholder="id_ukuran" value="{{ $ukuran->id_ukuran }}">
                     </div>
                     <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Jenis Role</label>
                      <input name="ukuran" type="text" class="form-control" id="formGroupExampleInput2" placeholder="ukuran" value="{{ $ukuran->ukuran}}">
                     </div>
                     <button type="submit" class="btn btn-sm"><i class="fa fa-pencil"></i>Submit</button>
        </form>
    </div>
  </div>
@endsection



 
      

