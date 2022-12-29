@extends('layouts/master')

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Warna </h3>
                @if(session('sukses'))
                <div class="alert alert-success text-center">
                {{session('sukses')}}
                </div>
                @endif
                  <div class = 'row'>
                <form action="/warna/{{$warna->id_warna}}/update" method="POST">
                      
                  {{csrf_field()}}
                     <div class="from-group">
                       <label for="formGroupExampleInput" class="form-label">ID Warna</label>
                       <input name="id_warna" type="integer" class="form-control" id="formGroupExampleInput" placeholder="id_warna" value="{{ $warna->id_warna }}">
                     </div>
                     <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Warna</label>
                      <input name="warna" type="text" class="form-control" id="formGroupExampleInput2" placeholder="nama_warna" value="{{ $warna->warna}}">
                     </div>
                      <button type="submit" class="btn btn-sm"><i class="fa fa-pencil"></i>Submit</button>
                     
                    
        </form>
    </div>
  </div>
@stop