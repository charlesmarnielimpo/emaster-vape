@extends('layouts.master')

@section('title', 'Products')

@section('stylesheets')
	<link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/plugins/datatables/jquery.dataTables.min.css' : 'plugins/datatables/jquery.dataTables.min.css') }}">
	<link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/css/pages/admin/admin.css' : '/css/pages/admin/admin.css') }}">
	<link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/css/pages/products/products.css' : '/css/pages/products/products.css') }}">
  <link rel="stylesheet" href="{{ url('/plugins/toastr/toastr.min.css') }}">
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
				<div class="col-xs-12 col-sm-6 col-md-6">
					<a href="{{ route('create') }}" class="btn btn-primary btn-sm pull-right" id="add-product-modal"><i class="icon icon-plus"></i>&nbsp;Add Product</a>
				</div>
			</div>
		</div>
		<!-- /Admin Breadcrumb -->

		<!-- Content -->
		<div id="content-wrapper">
			<div class="table-responsive table-hover">
        <table class="table" id="tbl-products">
          <thead>
            <tr>
              <th>Name</th>
              <th>SKU</th>
              <th>Price</th>
              <th>Qty</th>
              <th>Featured</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($products as $product)
							<tr>
								<td>{{ $product->name }} <br><span class="badge badge-primary">{{ substr($product->categories->name, 0, -1) }}</span></td>
								<td>{{ $product->sku }}</td>
								<td>₱ {{ number_format($product->price, 2) }}</td>
								<td>{{ $product->quantity }}</td>
								<td>
									@if($product->featured === 1) 
										<span class="badge badge-success">YES</span> 
									@else 
										<span class="badge badge-danger">NO</span> 
									@endif
								</td>
								<td>
									<button class="btn btn-info btn-sm btn-rounded product-edit"><i class="fa fa-pencil"></i></button>
									<button class="btn btn-info btn-sm btn-rounded product-delete"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
          	@endforeach
          </tbody>
        </table>
      </div>
		</div>
		<!-- /Content -->
	</div>
	<!-- /wrapper -->
@endsection

@section('scripts')
	<script src="{{ asset('/plugins/toastr/toastr.min.js') }}"></script>
  <script src="{{ asset(App::environment('production') ? 'public/plugins/datatables/jquery.dataTables.min.js' : 'plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset(App::environment('production') ? 'public/js/classes/product.js' : '/js/classes/product.js') }}"></script>
	<script src="{{ asset(App::environment('production') ? 'public/js/pages/products/products.js' : '/js/pages/products/products.js') }}"></script>
	<script>
	  @if(Session::has('message'))
	    var type = "{{ Session::get('alert-type', 'info') }}";
	    switch(type){
        case 'info':
          toastr.info("{{ Session::get('message') }}");
          break;
        case 'warning':
          toastr.warning("{{ Session::get('message') }}");
          break;
        case 'success':
          toastr.success("{{ Session::get('message') }}", 'Success!');
          break;
        case 'error':
          toastr.error("{{ Session::get('message') }}", 'Error!');
          break;
	    }
	  @endif
	</script>
@endsection