@extends('layouts.master')

@section('title', 'Create Product')

@section('stylesheets')
	<link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/plugins/switchery/switchery.min.css' : 'plugins/switchery/switchery.min.css') }}">
	<link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/plugins/tagsinput/src/bootstrap-tagsinput.css' : 'plugins/tagsinput/src/bootstrap-tagsinput.css') }}">
	<link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/plugins/ckeditor/contents.css' : 'plugins/ckeditor/contents.css') }}">
  <script src="{{ asset(App::environment('production') ? 'public/plugins/ckeditor/ckeditor.js' : 'plugins/ckeditor/ckeditor.js') }}"></script>
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
		              <label for="txt-add-product-name">Name:</label>
		              <input class="form-control form-control-rounded form-control-sm" name="product_name" type="text" id="txt-add-product-name" placeholder="Product name" autocomplete="off">
		            </div>
		        	</div>
		        	<div class="col-lg-6 col-md-6">
		        		<div class="form-group">
		              <label for="ddl-product-category">Category:</label>
		              <select name="product_category" id="ddl-product-category" class="form-control form-control-rounded form-control-sm">
		              	<option value="">Select category</option>
										@foreach ($categories as $category)
											<option value="{{ $category->id }}">{{ $category->name }}</option>
										@endforeach
		              </select>
		            </div>
		        	</div>
		        </div>
            <div class="row">
            	<div class="col-lg-6 col-md-6">
	            	<div class="form-group">
		              <label for="txt-add-product-price">Price:</label>
		              <input class="form-control form-control-rounded form-control-sm" name="product_price" type="text" id="txt-add-product-price" placeholder="Product price" autocomplete="off">
		            </div>
	            </div>
	            <div class="col-lg-6 col-md-6">
	            	<div class="form-group">
		              <label for="txt-add-product-quantity">Quantity:</label>
		              <input class="form-control form-control-rounded form-control-sm" name="product_quantity" type="number" id="txt-add-product-quantity" placeholder="Product quantity" autocomplete="off">
		            </div>
	            </div>
	            {{-- <div class="col-lg-4 col-md-4">
	            	<div class="form-group">
		              <label for="txt-add-product-points">Points:</label>
		              <input class="form-control form-control-rounded form-control-sm" name="product_points" type="number" id="txt-add-product-points" placeholder="Product points" autocomplete="off">
		            </div>
	            </div> --}}
            </div>
		        <div class="row" id="vape-tank-color" style="display: none;">
		        	<div class="col-lg-12 col-md-12">
		        		<div class="form-group">
		              <label for="txt-add-product-color">Color:</label>
		              <input type="text" data-role="tagsinput" class="form-control form-control-rounded" name="product_color" id="txt-add-product-color">
		            </div>
		        	</div>
		        </div>
		        <div id="liquid-bottle-size" style="display: none;">
			        <div class="row">
			        	<div class="col-lg-6 col-md-6">
				        		<div class="form-group">
				              <label for="txt-add-product-bottle-size">Bottle Size:</label>
				              <input type="text" data-role="tagsinput" class="form-control form-control-rounded" name="product_bottle_size" id="txt-add-product-bottle-size">
				            </div>
				        	</div>
				        	<div class="col-lg-6 col-md-6">
				        		<div class="form-group">
				              <label for="txt-add-product-strength">Strength:</label>
				              <input type="text" data-role="tagsinput" class="form-control form-control-rounded" name="product_strength" id="txt-add-product-strength">
				            </div>
				        	</div>
			        </div>
		        </div>
		        <div class="row" id="coils-ohm" style="display: none;">
		        	<div class="col-lg-12 col-md-12">
		        		<div class="form-group">
		              <label for="txt-add-product-ohm">Ohm:</label>
		              <input type="text" data-role="tagsinput" class="form-control form-control-rounded" name="product_ohm" id="txt-add-product-ohm">
		            </div>
		        	</div>
		        </div>
            <div class="row">
            	<div class="col-lg-10 col-md-10">
	            	<div class="form-group">
		              <label for="txt-add-product-image">Upload Image(s):</label>
		              <input class="form-control form-control-rounded form-control-sm" name="product_image[]" type="file" multiple id="txt-add-product-image">
		            </div>
            	</div>
            	<div class="col-lg-2 col-md-2">
	            	<div class="form-group">
		              <label for="txt-add-product-featured">Featured:</label><br>
		              <input class="js-single" name="product_featured" type="checkbox" id="txt-add-product-featured">
		            </div>
            	</div>
            </div>
            <div class="row">
            	<div class="col-lg-12 col-md-12">
	            	<div class="form-group">
		              <label for="txt-add-product-details">Details:</label>
		              <textarea name="product_details" id="txt-add-product-details" cols="30" rows="5" class="form-control"></textarea>
		            </div>
            	</div>
            </div>
            <div class="row">
            	<div class="col-lg-12 col-md-12">
	            	<div class="form-group">
		              <label for="txt-add-product-description">Description:</label>
		              <textarea name="product_description" value="0" id="txt-add-product-description" cols="30" rows="10" class="form-control"></textarea>
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
  <script src="{{ asset(App::environment('production') ? 'public/plugins/switchery/switchery.min.js' : 'plugins/switchery/switchery.min.js') }}"></script>
  <script src="{{ asset(App::environment('production') ? 'public/plugins/tagsinput/src/bootstrap-tagsinput.js' : 'plugins/tagsinput/src/bootstrap-tagsinput.js') }}"></script>
  <script src="{{ asset(App::environment('production') ? 'public/js/classes/product.js' : '/js/classes/product.js') }}"></script>
	<script src="{{ asset(App::environment('production') ? 'public/js/pages/products/products.js' : '/js/pages/products/products.js') }}"></script>
@endsection