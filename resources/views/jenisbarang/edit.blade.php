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

                 @if(session('sukses'))
                  <div class="alert alert-success" role="alert">
                   {{session ('sukses')}}
                  </div>
                 @endif

                  <div class = 'row'>

                <form action="/jenisbarang/{{$jenisbarang->id_jb}}/update" method="POST">
                      
                  {{csrf_field()}}
                     <div class="from-group">
                       <label for="formGroupExampleInput" class="form-label">ID Jenis Barang</label>
                       <input name="id_jb" type="inteeger" class="form-control" id="formGroupExampleInput" placeholder="id_jb" value="{{ $jenisbarang->id_jb }}" disabled>
                     </div>

                     <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Jenis Barang</label>
                      <input name="nama_jb" type="text" class="form-control" id="formGroupExampleInput2" placeholder="jenis_barang" value="{{ $jenisbarang->nama_jb}}">
                     </div>

                     <div class="from-group">
                      <button type="submit" class="btn btn-succes btn-flat">
                        <i class="fa fa-paper-plane"></i> UPDATE
                      </button>
                     </div>   
                    </form>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection



 
      

