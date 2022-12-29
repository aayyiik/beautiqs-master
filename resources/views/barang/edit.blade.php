@extends('layouts/master')

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Barang</h3>
                 @if(session('sukses'))
                  <div class="alert alert-success" role="alert">
                   {{session ('sukses')}}
                  </div>
                 @endif
                  <div class = 'row'>

                <form action="/barang/{{$barang->kode_barang}}/update" method="POST">
                      
                  {{csrf_field()}}
                     <div class="from-group">
                       <label for="formGroupExampleInput" class="form-label">Kode Barang</label>
                       <input name="kode_barang" type="text" class="form-control" id="formGroupExampleInput" placeholder="Kode Barang" value="{{ $barang->kode_barang }}">
                     </div>
                     
                     <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Jenis Barang</label>
                      <input name="id_jb" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="Jenis Barang" value="{{ $barang->id_jb}}">
                    </div>

                     <div class="mb-3">
                       <label for="formGroupExampleInput2" class="form-label">Nama Barang</label>
                       <input name="nama_barang" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Barang" value="{{ $barang->nama_barang }}">
                     </div>

                     <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Stok Barang</label>
                        <input name="stok" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Stok Barang" value="{{ $barang->stok }}" readonly>
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Harga Beli Barang</label>
                        <input name="harga_beli_barang" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Harga Beli Barang" value="{{ $barang->harga_beli_barang }}">
                      </div>

                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Harga Jual Barang</label>
                        <input name="harga_jual_barang" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Harga Jual Barang" value="{{ $barang->harga_jual_barang }}">
                      </div>
                      <button type="submit" class="btn btn-sm"><i class="fa fa-pencil-square-o"></i>Update</button>
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



 
      

