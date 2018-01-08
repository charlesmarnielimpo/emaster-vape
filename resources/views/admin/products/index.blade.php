@extends('layouts.master')

@section('title', 'Products')

@section('stylesheets')
	<link rel="stylesheet" href="{{ asset('/css/pages/admin/admin.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/pages/products/products.css') }}">
@endsection

@section('content')
	<div id="wrapper">
		@include('admin.layouts.partials._topnav')
		@include('admin.layouts.partials._sidenav')

		<!-- Admin Breadcrumb-->
		<div id="admin-breadcrumb">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h2>Products</h2>
					<ul class="breadcrumbs" style="text-align: left;">
					  <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
					  <li class="separator">&nbsp; </li>
					  <li><a href="{{ route('categories') }}">Categories</a></li>
            <li class="separator">&nbsp; </li>
            <li class="active"><a href="{{ route('products') }}" class="active">Products</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Admin Breadcrumb -->

		<!-- Content -->
		<div id="content-wrapper">
      <div class="row">
        <div class="col-lg-12 col-md-12">
         test
        </div>
      </div>
		</div>
		<!-- /Content -->
	</div>
	<!-- /wrapper -->
@endsection

@section('scripts')
  <script src="{{ asset('/js/classes/product.js') }}"></script>
	<script src="{{ asset('/js/pages/products/products.js') }}"></script>
@endsection