@extends('layouts.default')
@section('title')View Pelayanan Bantuan Bencana Alam @endsection
@section('content')
<?php $path = 'bencana' ?>
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Bantuan Pelayanan Bantuan Bencana Alam</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('bencana') }}">Pelayanan Bantuan Bencana Alam</a></li>
        <li class="active">View Data</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        <div class="tab-base tab-stacked-left">
        	<!--Nav tabs-->
        	<ul class="nav nav-tabs">
        		<li class="active">
        			<a data-toggle="tab" href="#demo-stk-lft-tab-1" aria-expanded="true">Description</a>
        		</li>
        		<li class="">
        			<a data-toggle="tab" href="#demo-stk-lft-tab-2" aria-expanded="false">Timeline</a>
        		</li>
        		<li class="">
        			<a data-toggle="tab" href="#demo-stk-lft-tab-3" aria-expanded="false">Dokumen</a>
        		</li>
                <li class="">
        			<a data-toggle="tab" href="#demo-stk-lft-tab-4" aria-expanded="false">Latar Belakang</a>
        		</li>
                <li class="">
        			<a data-toggle="tab" href="#demo-stk-lft-tab-5" aria-expanded="false">Evaluasi</a>
        		</li>
        	</ul>

        	<!--Tabs Content-->
        	<div class="tab-content">
        		<div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
              <p>Tahun : {{ $model->tahun }}</p>
        			<h4 class="text-thin">Tempat : {{ $model->tempat }}</h4>
                    <h4 class="text-thin">Latar Belakang Kegiatan :</h4>
        			<p>{{ $model->kerjasama }}</p>
        		</div>
        		<div id="demo-stk-lft-tab-2" class="tab-pane fade">
        			@include('view.timeline')
        		</div>
        		<div id="demo-stk-lft-tab-3" class="tab-pane fade">
        			<h4 class="text-thin">Dokumen</h4><br>
                    <p>Perjanjian kerjasama dengan Univ/Lembaga :</p>
                    <a href="{{ url('contents/bencana/document/'.$model->doc_kerjasama) }}" class="btn btn-primary btn-labeled fa fa-arrow-down">{{ $model->doc_kerjasama }}</a>
                    <p>Rencana Anggaran Biaya :</p>
                    <a href="{{ url('contents/bencana/document/'.$model->doc_anggaran) }}" class="btn btn-primary btn-labeled fa fa-arrow-down">{{ $model->doc_anggaran }}</a>
                    <p>Dokumen Manajemen Resiko  :</p>
                    <a href="{{ url('contents/bencana/document/'.$model->doc_resiko) }}" class="btn btn-primary btn-labeled fa fa-arrow-down">{{ $model->doc_resiko }}</a>
                    <p>TOR Term Of Reference   :</p>
                    <a href="{{ url('contents/bencana/document/'.$model->doc_tor) }}" class="btn btn-primary btn-labeled fa fa-arrow-down">{{ $model->doc_tor }}</a>
                    <p>Laporan Akhir    :</p>
                    <a href="{{ url('contents/bencana/document/'.$model->doc_laporan) }}" class="btn btn-primary btn-labeled fa fa-arrow-down">{{ $model->doc_laporan }}</a>
                    <p>Laporan Evaluasi :</p>
                    <a href="{{ url('contents/bencana/document/'.$model->doc_evaluasi) }}" class="btn btn-primary btn-labeled fa fa-arrow-down">{{ $model->doc_evaluasi }}</a>
        		</div>
                <div id="demo-stk-lft-tab-4" class="tab-pane fade">
        			@include('view.latar_belakang')
        		</div>
                <div id="demo-stk-lft-tab-5" class="tab-pane fade">
        			@include('view.evaluasi')
        		</div>
    		</div>
    	</div>
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection
