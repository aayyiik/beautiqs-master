@extends('layouts.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-header">Form Pesan</h3>
                <div class="card-body">
                    <a class="fa fa-shopping-cart btn btn-success" data-toggle="modal" data-target="#exampleModal" href="" role="button"></a>
                      {{-- <a href="/pemesanan/{{$barangs->kode_barang}}/tambah"><i class="bi-cart-plus-fill"></i></a> --}}
                  
             @if(empty($cart) || count($cart) ==0 )
                      Kosong
          
                    
            @else
            <table class="table table-bordered">
              <tr class="success"><th colspan="6">Detail Transaksi</th></tr>
     
                  <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Jumlah Pesan</th>
                    <th>Harga beli</th>
                    <th>SubTotal</th>
                    <th>Aksi</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; 
                  $total=0;?>
                  @foreach($cart as $ct=>$val)
           
                <tr>
                  <td>{{ $no }}</td>
                  <td>{{ $val["nama_barang"] }}</td>
                  <td>{{ $val["jumlah_up"] }}</td>
                  <td>{{ $val["harga_beli_barang"] }}</td>
                  <td>{{ $val["harga_beli_barang"]  * $val["jumlah_up"]}}</td>
                  <td>
                    <a href="/pemesanan/{{ $ct }}/hapus">Hapus</a>
                  </td>
                </tr>
                <?php $no++ ?>
                <?php $total=$total+($val['harga_beli_barang']*$val['jumlah_up']) ?>
                @endforeach
                <tr>
                  <th colspan="5">Total</td>
                  <th>{{$total}}</th>
                </tr>
                </tbody>
              </table>

              <table class="table table-bordered"> 
               
                <tr><td>
                  {{-- <div class="form-group col-md-6">
                    <label for="formGroupExampleInput2" class="form-label">Pegawai</label>
                    <select name="id_user" id="users" class="form-control">  
                      <option value="">- Pilih -</option>
                    @foreach ($users as $us)
                      <option value="{{ $us->id_user }}">{{ $us->nama_user }}</option>
                    @endforeach                      
               </select>                   
                </div> --}}
                    
                <div class="from-group {{ $errors->has('nama_sup') ? 'has-error' : '' }}">
                  <label for="formGroupExampleInput" class="form-label">Pemesan</label>
                  <input name="id_user" type="text" value="{{Auth::user()->nama_user}}"class="form-control" id="formGroupExampleInput">
                </div>

              <div class="form-group col-md-6">
                <label for="formGroupExampleInput2" class="form-label">Supplier</label>
        
                    <select name="id_sup" class="form-control">  
                      <option value="">- Pilih -</option>
                      @foreach ($suppliers as $bg)
                        <option value="{{ $bg->id_sup }}">{{ $bg->nama_sup }}</option>
                      @endforeach                      
                    </select>
            </div>
            
           <div class="form-group col-md-4">
            <label>Tanggal Pesan</label>
            <input type="date" id="date" value="<?=date('Y-m-d')?>"  class="form-control" />
          </div>   

              <a href="/pemesanan/pesan" class="btn btn-info">Pesankan</a>
              @endif
                   </div>
                        
                    </div>
                  </div>
                </div>
             </div>
          </div>
        </div>
      </div>  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <table class="table table-striped" id="datatables">
          <thead>
            <tr>
      <th>Kode Barang</th>
      <th>Nama Barang</th>
      <th>Jenis Barang</th>
      <th>Harga Beli Barang</th>
      <th> AKSI</th>
  </tr>
</thead>
<tbody>
    @foreach($barangs as $barang)
    <tr>
        <td>{{ $barang->kode_barang }}</td>                         
        <td>{{ $barang->nama_barang }}</td>
        <td>{{ $barang->jenis_barang->nama_jb }}</td>
        <td>{{ $barang->harga_beli_barang }}</td>
        <td> <a href="/pemesanan/{{$barang->kode_barang}}/tambah" >Tambah ke cart</a>
        </td>                      
    </tr>
    @endforeach
</tbody>
</table>  
</div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@stop