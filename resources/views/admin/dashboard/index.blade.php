@extends('layouts.master')

@section('title', 'Dashboard')

@section('stylesheets')
	<link rel="stylesheet" href="{{ asset('/css/pages/admin/admin.css') }}">
@endsection

@section('content')
	<div id="wrapper">
		@include('admin.layouts.partials._topnav')
		@include('admin.layouts.partials._sidenav')

		<!-- Admin Breadcrumb-->
		<div id="admin-breadcrumb">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h2>Dashboard</h2>
					<ul class="breadcrumbs" style="text-align: left;">
					  <li><a href="#">Dashboard</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Admin Breadcrumb -->

		<!-- Content -->
		<div id="content-wrapper">
			
		</div>
		<!-- /Content -->
	</div>
@endsection

@section('scripts')
	<script src="{{ asset('/js/pages/dashboard/dashboard.js') }}"></script>
@endsection