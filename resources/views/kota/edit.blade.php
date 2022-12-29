@extends('layouts/master')

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Jenis Barang</h3>
                  <div class = 'row'>
                  <form action="/kota/{{$kota->id_kota}}/update" method="POST">
                   {{csrf_field()}}

                     <div class="from-group">
                       <label for="formGroupExampleInput" class="form-label">ID Kota</label>
                       <input name="id_kota" type="integer" class="form-control" id="formGroupExampleInput" placeholder="id_kota" value="{{ $kota->id_kota }}">
                     </div>

                     <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Nama Kota</label>
                      <input name="nama_kota" type="text" class="form-control" id="formGroupExampleInput2" placeholder="nama_kota" value="{{ $kota->nama_kota}}">
                     </div>
                     <button type="submit" class="btn btn-sm"><i class="fa fa-pencil"></i>Update</button>      
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>

@stop