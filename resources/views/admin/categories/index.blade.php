@extends('layouts.master')

@section('title', 'Categories')

@section('stylesheets')
	<link rel="stylesheet" href="{{ asset('/css/pages/admin/admin.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/pages/categories/categories.css') }}">
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
					<h2>Categories</h2>
					<ul class="breadcrumbs" style="text-align: left;">
					  <li><a href="#">Dashboard</a></li>
					  <li class="separator">&nbsp; </li>
					  <li class="active"><a href="#" class="active">Categories</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<button class="btn btn-primary btn-sm pull-right" type="button" data-toggle="modal" data-target="#modal-add-category" id="add-category-modal"><i class="icon icon-plus"></i>&nbsp;Add Category</button>
				</div>
			</div>
		</div>
		<!-- /Admin Breadcrumb -->

		<!-- Content -->
		<div id="content-wrapper">
			<div class="table-responsive table-hover">
        <table class="table">
          <thead>
            <tr>
              <th width="5%" class="text-center">#</th>
              <th width="40%">Name</th>
              <th width="30%">Created At</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($categories as $category)
              <tr>
                <th class="text-center">{{ $category->id }}</th>
                <td>{{ $category->category_name }}</td>
                <td>{{ date('M j, Y h:i A', strtotime($category->created_at)) }}</td>
                <td>
                	<button class="btn btn-info btn-sm btn-rounded" type="button" data-toggle="tooltip" data-placement="top" title="Edit" data-id="{{ $category->id }}"><i class="fa fa-pencil"></i></button>
                	<button class="btn btn-info btn-sm btn-rounded" type="button" data-toggle="tooltip" data-placement="top" title="Delete"data-id="{{ $category->id }}"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
            @empty
              <tr class="text-center">
                <td colspan="4"><i class="fa fa-exclamation-triangle"></i>&nbsp;No data available</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
		</div>
		<!-- /Content -->
	</div>
	<!-- /wrapper -->

	<!-- Modals -->
  <div class="modal fade" id="modal-add-category" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <form action="{{ url('admin/categories') }}" method="POST" id="frm-add-category">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add Category</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="small-rounded-input">Name:</label>
              <input class="form-control form-control-rounded form-control-sm" name="category_name" type="text" id="txt-add-category-name" placeholder="Category name">
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Close</button>
            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-check-square-o" id="btn-add-category"></i>&nbsp;Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('scripts')
	<script src="{{ asset('/plugins/toastr/toastr.min.js') }}"></script>
  <script src="{{ asset('/js/classes/category.js') }}"></script>
	<script src="{{ asset('/js/pages/categories/categories.js') }}"></script>
@endsection