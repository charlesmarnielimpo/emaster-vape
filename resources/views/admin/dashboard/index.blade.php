@extends('layouts.master')

@section('title', 'Dashboard')

@section('stylesheets')
	<link rel="stylesheet" href="{{ asset('/css/pages/admin/admin.css') }}">
@endsection

@section('content')
	<div id="wrapper">
		<!-- Admin Topnav -->
		<div id="admin-topnav">
			<div class="settings text-right">
			  <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i>&nbsp; Logout</a>
			</div>
		</div>
		<!-- /Admin Topnav -->
		<!-- Admin Breadcrumb-->
		<div id="admin-breadcrumb">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h2>Dashboard</h2>
					<ul class="breadcrumbs" style="text-align: left;">
					  <li class="active"><a href="#" class="active">Dashboard</a></li>
					  <li class="separator">&nbsp; </li>
					  <li><a href="#">Categories</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Admin Breadcrumb -->
		<!-- Admin Sidenav -->
		<aside id="admin-sidenav">
			<div id="logo">
				<img src="{{ url('/img/logo/logo.png') }}" alt="" width="70px">
			</div>
			<div id="sidenav">
				<p class="menu-label">General</p>
				<ul>
					<li class="active">
						<a href="{{ route('dashboard') }}" class="active"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
					</li>
					<li>
						<a href="{{ route('categories') }}"><i class="fa fa-list"></i>&nbsp; Categories</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-users"></i>&nbsp; Users</a>
					</li>
				</ul>
			</div>
		</aside>
		<!-- /Admin Sidenav -->

		<!-- Content -->
		<div id="content-wrapper">
			asd
		</div>
		<!-- /Content -->
	</div>
@endsection

@section('scripts')

@endsection