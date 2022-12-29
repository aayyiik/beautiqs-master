@extends('layouts.master') 

@section('content')

  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-header">Data Barang</h3>
                        <div class="right">
                          <a class="fa fa-plus btn btn-success" data-toggle="modal" data-target="#exampleModal" href="" role="button">Tambah</a>
                          <a class="fa fa-trash btn btn-info" href="barang/trash" role="button">Sampah</a>
                        </div>
                      </div>
                        <div class="panel-body">
                          <table class="table table-striped" id="datatables">
                            <thead>
                              <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Stok Barang</th>
                        <th>Harga Beli Barang</th>
                        <th>Harga Jual Barang</th>
                        <th> AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($barangs as $barang)
                      <tr>
                          <td>{{ $barang->kode_barang }}</td>                         
                          <td>{{ $barang->nama_barang }}</td>
                          <td>{{ $barang->jenis_barang->nama_jb }}</td>
                          <td>{{ $barang->stok }}</td>
                          <td>{{ $barang->harga_beli_barang }}</td>
                          <td>{{ $barang->harga_jual_barang }}</td>
                          <td><a href="/barang/{{ $barang->kode_barang }}/edit" class="btn btn-warning btn-sm">Edit</a>
                              <a href="/barang/{{ $barang->kode_barang }}/delete"class="btn btn-danger btn-sm" 
                                onclick="return confirm ('Yakin mau dihapus ?')">Hapus</a> 
                              <a href="/barang/{{ $barang->kode_barang }}/detail" class="btn btn-info btn-sm">Detail</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Barang Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/barang/create" method="GET">
             {{csrf_field()}}
                  
                  <div class="from-group {{ $errors->has('nama_barang') ? 'has-error' : '' }}">
                    <label for="formGroupExampleInput" class="form-label">Nama Barang</label>
                    <input name="nama_barang" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Barang">
                    @if($errors->has('nama_barang') )
                    <span class="help-block">{{ $errors->first('nama_barang') }}</span>
                   @endif
                  </div>

                <div class="from-group {{ $errors->has('id_jb') ? 'has-error' : '' }}">
                    <label for="formGroupExampleInput1" class="form-label">Id Jenis Barang</label>
                    <select name="id_jb" class="form-control">
                          <option value="">- Pilih -</option>
                        @foreach ($jenisbarangs as $jb)
                          <option value="{{ $jb->id_jb }}">{{ $jb->nama_jb }}</option>
                        @endforeach                      
                   </select>                   
                      @if($errors->has('id_jb') )
                      <span class="help-block">{{ $errors->first('id_jb') }}</span>
                      @endif
                </div>
                    
                  <div class="from-group {{ $errors->has('stok') ? 'has-error' : '' }}">
                    <label for="formGroupExampleInput" class="form-label">Stok Barang</label>
                    <input name="stok" type="integer" class="form-control" id="formGroupExampleInput" placeholder="Stok">
                    @if($errors->has('stok') )
                    <span class="help-block">{{ $errors->first('stok') }}</span>
                    @endif
                  </div>
                  
                  <div class="from-group {{ $errors->has('harga_beli_barang') ? 'has-error' : '' }}">
                    <label for="formGroupExampleInput2" class="form-label">Harga Beli Barang</label>
                    <input name = "harga_beli_barang" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="Harga Beli">
                    @if($errors->has('harga_beli_barang') )
                    <span class="help-block">{{ $errors->first('harga_beli_barang') }}</span>
                    @endif
                  </div>
                  
                  <div class="from-group {{ $errors->has('harga_jual_barang') ? 'has-error' : '' }}">
                    <label for="formGroupExampleInput" class="form-label">Harga Jual Barang</label>
                    <input name= "harga_jual_barang" type="integer" class="form-control" id="formGroupExampleInput" placeholder="Harga Jual">
                    @if($errors->has('harga_jual_barang') )
                    <span class="help-block">{{ $errors->first('harga_jual_barang') }}</span>
                    @endif
                  </div>
{{-- 
                  <div class="custom-control custom-checkbox">
                    @foreach ($warna as $item)
                    <label>
                      <input type="checkbox" name="id_warna[]" class="custom-control-label" for="customCheck1" value="{{ $item->id_warna }}">Warna {{ $item->warna }}</label>
                      @endforeach
                  </div>
                   --}}

                   <div class="from-group {{ $errors->has('id_warna') ? 'has-error' : '' }}">
                    <label for="formGroupExampleInput1" class="form-label">Warna</label>
                    <select name="id_warna" class="form-control">
                          <option value="">- Pilih -</option>
                        @foreach ($warna as $wn)
                          <option value="{{ $wn->id_warna }}">{{ $wn->warna }}</option>
                        @endforeach                      
                   </select>                   
                      @if($errors->has('id_warna') )
                      <span class="help-block">{{ $errors->first('id_warna') }}</span>
                      @endif
                </div>

                  <div class="custom-control custom-checkbox">
                    @foreach ($list_ukuran as $item)
                    <label>
                      <input type="checkbox" name="id_ukuran[]" class="custom-control-label" for="customCheck1" value="{{ $item->id_ukuran }}">Ukuran {{ $item->ukuran }}</label>
                      @endforeach
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
