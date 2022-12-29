@extends('layouts.master') 

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Data Kota</h3>
                <a class="btn btn-primary" href="/kota" role="button">Kembali</a>
              </div>
              <div class="pull-right">
                </a>
              </div>
              <div class="panel-body">
               <table class="table table-striped">
                <thead>
                  <tr>
                      <th>ID Kota</th>
                      <th>Kota</th>
                      <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($kotas as $kota)
                    <tr>
                        <td>{{ $kota->id_kota }}</td>
                        <td>{{ $kota->nama_kota }}</td>
                        <td><a href="/kota/{{$kota->id_kota}}/restore" class="btn btn-warning btn-sm">Pulihkan</a>
                            <a href="#" class="btn btn-danger btn-sm forceDelete" kota-id="{{$kota->id_kota}}">Delete</a>          
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
@stop
@section('footer')
    <script>
      $('.forceDelete').click(function(){
        var kota_id = $(this).attr('kota-id');
        swal({
        title: "Yakin ?",
        text: "Ingin menghapus permanen ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
              window.location = "/kota/"+kota_id+"/forceDelete";
            } 
          });
      });
    </script>
@stop

