@extends('layouts.default')
@section('title')View Quick Win @endsection
@section('content')
<?php $path = 'bencana' ?>
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Quick Win</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('quick-win') }}">Quick Win</a></li>
        <li class="active">View Data</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        <div class="tab-base">
			<!--Nav Tabs-->
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#demo-lft-tab-1">TW1</a>
				</li>
				<li>
					<a data-toggle="tab" href="#demo-lft-tab-2">TW2</a>
				</li>
				<li>
					<a data-toggle="tab" href="#demo-lft-tab-3">TW3</a>
				</li>
                <li>
					<a data-toggle="tab" href="#demo-lft-tab-4">TW4</a>
				</li>
			</ul>

			<!--Tabs Content-->
			<div class="tab-content">
				<div id="demo-lft-tab-1" class="tab-pane fade active in">
                    <div class="panel panel-colorful panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Performance System</h3>
						</div>
						<div class="panel-body">
							<p>{{ $model->tw1_performance }}</p>
						</div>
					</div>
                    <div class="panel panel-colorful panel-mint">
						<div class="panel-heading">
							<h3 class="panel-title">Process System</h3>
						</div>
						<div class="panel-body">
							<p>{{ $model->tw1_process }}</p>
						</div>
					</div>
                    <div class="panel panel-colorful panel-pink">
						<div class="panel-heading">
							<h3 class="panel-title">People System</h3>
						</div>
						<div class="panel-body">
							<p>{{ $model->tw1_people }}</p>
						</div>
					</div>
				</div>
				<div id="demo-lft-tab-2" class="tab-pane fade">
                    <div class="panel panel-colorful panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Performance System</h3>
						</div>
						<div class="panel-body">
							<p>{{ $model->tw2_performance }}</p>
						</div>
					</div>
                    <div class="panel panel-colorful panel-mint">
						<div class="panel-heading">
							<h3 class="panel-title">Process System</h3>
						</div>
						<div class="panel-body">
							<p>{{ $model->tw2_process }}</p>
						</div>
					</div>
                    <div class="panel panel-colorful panel-pink">
						<div class="panel-heading">
							<h3 class="panel-title">People System</h3>
						</div>
						<div class="panel-body">
							<p>{{ $model->tw2_people }}</p>
						</div>
					</div>
				</div>
				<div id="demo-lft-tab-3" class="tab-pane fade">
                    <div class="panel panel-colorful panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Performance System</h3>
						</div>
						<div class="panel-body">
							<p>{{ $model->tw3_performance }}</p>
						</div>
					</div>
                    <div class="panel panel-colorful panel-mint">
						<div class="panel-heading">
							<h3 class="panel-title">Process System</h3>
						</div>
						<div class="panel-body">
							<p>{{ $model->tw3_process }}</p>
						</div>
					</div>
                    <div class="panel panel-colorful panel-pink">
						<div class="panel-heading">
							<h3 class="panel-title">People System</h3>
						</div>
						<div class="panel-body">
							<p>{{ $model->tw3_people }}</p>
						</div>
					</div>
				</div>
                <div id="demo-lft-tab-3" class="tab-pane fade">
                    <div class="panel panel-colorful panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Performance System</h3>
						</div>
						<div class="panel-body">
							<p>{{ $model->tw3_performance }}</p>
						</div>
					</div>
                    <div class="panel panel-colorful panel-mint">
						<div class="panel-heading">
							<h3 class="panel-title">Process System</h3>
						</div>
						<div class="panel-body">
							<p>{{ $model->tw3_process }}</p>
						</div>
					</div>
                    <div class="panel panel-colorful panel-pink">
						<div class="panel-heading">
							<h3 class="panel-title">People System</h3>
						</div>
						<div class="panel-body">
							<p>{{ $model->tw4_people }}</p>
						</div>
					</div>
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
