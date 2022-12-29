@extends('layouts/master')

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Supplier</h3>
                 @if(session('sukses'))
                  <div class="alert alert-success" role="alert">
                   {{session ('sukses')}}
                  </div>
                 @endif
                  <div class = 'row'>

                <form action="/supplier/{{$supplier->id_sup}}/update" method="POST">
                      
                  {{csrf_field()}}
                     <div class="from-group">
                       <label for="formGroupExampleInput" class="form-label">Id Supplier</label>
                       <input name="id_sup" type="text" class="form-control" id="formGroupExampleInput" placeholder="Id Supplier" value="{{ $supplier->id_sup }}">
                     </div>
                     <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Id Kota</label>
                      <input name="id_kota" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="Id Kota" value="{{ $supplier->kota->id_kota}}">
                    </div>
                     <div class="mb-3">
                       <label for="formGroupExampleInput2" class="form-label">Nama Supplier</label>
                       <input name="nama_sup" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Supplier" value="{{ $supplier->nama_sup }}">
                     </div>
                     <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Alamat Supplier</label>
                        <input name="alamat_sup" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat Supplier" value="{{ $supplier->alamat_sup}}">
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Telp Supplier</label>
                        <input name="telp_sup" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Telp Supplier" value="{{ $supplier->telp_sup}}">
                      </div>
                      <button type="submit" class="btn btn-sm"><i class="fa fa-pencil"></i>Submit</button>
                      
        </form>
    </div>
  </div>
@endsection



 
      

