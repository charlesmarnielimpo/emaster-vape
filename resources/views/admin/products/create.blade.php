@extends('layouts.master')

@section('title', 'Create Product')

@section('stylesheets')
	<link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/css/pages/admin/admin.css' : '/css/pages/admin/admin.css') }}">
	<link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/css/pages/products/products.css' : '/css/pages/products/products.css') }}">
@endsection

@section('content')
	<div id="wrapper">
		@include('admin.layouts.partials._topnav')
		@include('admin.layouts.partials._sidenav')

		<!-- Admin Breadcrumb-->
		<div id="admin-breadcrumb">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h2>Create Product</h2>
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
		      {{-- <form action="{{ route('productImageUpload') }}" method="post" enctype="multipart/form-data" class="dropzone" id="frm-add-product-image">
				  	{{ csrf_field() }}
					  <div class="fallback">
					    <input name="file" type="file" multiple />
					  </div>
					</form> --}}
        	<form action="{{ route('store') }}" method="POST" id="frm-add-product" enctype="multipart/form-data">
		        <input type="hidden" name="_token" value="{{ csrf_token() }}">
		        <div class="row">
		        	<div class="col-lg-6 col-md-6">
		        		<div class="form-group">
		              <label for="small-rounded-input">Name:</label>
		              <input class="form-control form-control-rounded form-control-sm" name="product_name" type="text" id="txt-add-product-name" placeholder="Product name" autocomplete="off">
		            </div>
		        	</div>
		        	<div class="col-lg-6 col-md-6">
		        		<div class="form-group">
		              <label for="small-rounded-input">Category:</label>
		              <select name="product_category" id="ddl-product-category" class="form-control form-control-rounded form-control-sm">
		              	<option value="">Select category</option>
										@foreach ($categories as $category)
											<option value="{{ $category->id }}">{{ $category->category_name }}</option>
										@endforeach
		              </select>
		            </div>
		        	</div>
		        </div>
            <div class="row">
            	<div class="col-lg-4 col-md-4">
	            	<div class="form-group">
		              <label for="small-rounded-input">Price:</label>
		              <input class="form-control form-control-rounded form-control-sm" name="product_price" type="text" id="txt-add-product-price" placeholder="Product price" autocomplete="off">
		            </div>
	            </div>
	            <div class="col-lg-4 col-md-4">
	            	<div class="form-group">
		              <label for="small-rounded-input">Quantity:</label>
		              <input class="form-control form-control-rounded form-control-sm" name="product_quantity" type="number" id="txt-add-product-quantity" placeholder="Product quantity" autocomplete="off">
		            </div>
	            </div>
	            <div class="col-lg-4 col-md-4">
	            	<div class="form-group">
		              <label for="small-rounded-input">Points:</label>
		              <input class="form-control form-control-rounded form-control-sm" name="product_points" type="number" id="txt-add-product-points" placeholder="Product points" autocomplete="off">
		            </div>
	            </div>
            </div>
            <div class="row">
            	<div class="col-lg-12 col-md-12">
	            	<div class="form-group">
		              <label for="small-rounded-input">Upload Image(s):</label>
		              <input class="form-control form-control-rounded form-control-sm" name="product_image[]" type="file" multiple id="txt-add-product-image">
		            </div>
            	</div>
            </div>
            <button class="btn btn-primary pull-right btn-sm" style="margin-bottom: 20px;" type="submit" id="btn-add-product"><i class="fa fa-check-square-o"></i>&nbsp;Save</button>
		      </form>
        </div>
      </div>
		</div>
		<!-- /Content -->
	</div>
	<!-- /wrapper -->
@endsection

@section('scripts')
  <script src="{{ asset(App::environment('production') ? 'public/js/classes/product.js' : '/js/classes/product.js') }}"></script>
	<script src="{{ asset(App::environment('production') ? 'public/js/pages/products/products.js' : '/js/pages/products/products.js') }}"></script>
@endsection