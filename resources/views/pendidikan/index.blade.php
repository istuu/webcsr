@extends('layouts.default')
@section('title')Pelayanan Pendidikan @endsection
@push('style')
<!--Bootstrap Table [ OPTIONAL ]-->
<link href="{{ url('admin') }}/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
<link href="{{ url('admin') }}/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet">
@endpush
@push('javascript')
<!--DataTables [ OPTIONAL ]-->
<script src="{{ url('admin') }}/plugins/datatables/media/js/jquery.dataTables.js"></script>
<script src="{{ url('admin') }}/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
<script src="{{ url('admin') }}/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<!--DataTables Sample [ SAMPLE ]-->
<script src="{{ url('admin') }}/js/demo/tables-datatables.js"></script>
@endpush
@section('content')
<?php $path = 'pendidikan' ?>

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Bantuan Pelayanan Pendidikan</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">Pelayanan Pendidikan</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Tabel Pelayanan Pendidikan</h3>
            </div>
            <div class="panel-body">
                <a href="{{ url('pendidikan/create') }}" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
            </div>
            <div class="panel-body">
                @include('common.alert')
                <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="10%">Tempat</th>
                            <th class="min-tablet">Latar Belakang Kegiatan</th>
                            <th>Tahun</th>
                            <th>Anggaran</th>
                            <th width="10%"></th>
                            <th width="10%">Penerima Bantuan</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($models as $model)
                        <?php $count_penerima = $penerima->where('pendidikan_id','=',$model->id)->count(); ?>
                            <tr class="{{ $model->kode == '' ? 'danger':null }}">
                                <td>{{ $model->tempat }}</td>
                                <td>{{ $model->kerjasama }}</td>
                                <td>{{ $model->tahun }}</td>
                                <td class="text-right">{{ 'Rp. '.number_format($model->anggaran,2,',','.') }}</td>
                                <td>
                                  <button id="{{ $model->id }}" type="button" class="btn btn-success btn-anggaran btn-block" data-toggle="modal" data-target="#modalAnggaran">Edit Anggaran</button>
                                  <a href="{{ url('pendidikan/laporan/'.$model->id) }}" type="button" class="btn btn-primary btn-block">Ajukan Laporan</a>
                                </td>
                                <td>
                                    <a href="{{ url('pendidikan/penerima/'.$model->id) }}" class="btn {{ $count_penerima > 0 ? 'btn-success':'btn-primary' }}"> {{ $count_penerima }} Data Penerima</a>
                                </td>
                                <td>
                                    <a href="{{ url('pendidikan/'.$model->id) }}" class="btn btn-info btn-icon icon-lg fa fa-eye"></a>
                                    <a href="{{ url('pendidikan/'.$model->id.'/edit') }}" class="btn btn-warning btn-icon icon-lg fa fa-pencil-square"></a>
                                    <button id="{{ $model->id }}" class="btn btn-danger btn-icon icon-lg fa fa-trash"></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
<!-- Modal -->
<div id="modalAnggaran" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <form id="formAnggaran" method="post" action="pendidikan/anggaran">
        @include('includes.anggaran-popup')
      </form>
    </div>
  </div>
</div>
@endsection
@push('javascript')
<script src="{{ url('admin') }}/plugins/bootbox/bootbox.min.js"></script>
<script>
$('.btn.btn-danger.btn-icon.icon-lg.fa.fa-trash').on('click', function(){
    var id = $(this).attr('id');
    var locale = "{{ url('/') }}";
    bootbox.confirm("Apakah anda yakin akan menghapus data?", function(result) {
        if (result) {
            window.location.replace(locale + '/pendidikan/delete/'+id);
        }else{
            $.niftyNoty({
                type: 'info',
                icon : 'fa fa-minus',
                message : 'Perintah dibatalkan.',
                container : 'floating',
                timer : 3000
            });
        };

    });
});

var locale  = "{{ url('/') }}";
$('.btn.btn-success.btn-anggaran').on('click', function(){
    var id = $(this).attr('id');
    $.ajax({
        url: locale + '/pendidikan/get-anggaran/'+id,
        success: function(result) {
          $("#formAnggaran").html(result);
          cekKode();
        }
    });
});
function cekKode(){
  $("#kode").focusout(function() {
    $.ajax({
        url: locale + '/cek-kode/'+$(this).val(),
        success: function(result) {
          $("#title").val(result);
          $("#submitAnggaran").removeAttr('disabled');
        }
    });
  });
  $("#kode").keypress(function(e) {
      if(e.which == 13) {
        $.ajax({
            url: locale + '/cek-kode/'+$(this).val(),
            success: function(result) {
              $("#title").val(result);
              $("#submitAnggaran").removeAttr('disabled');
            }
        });
      }
  });
}
</script>
@endpush
