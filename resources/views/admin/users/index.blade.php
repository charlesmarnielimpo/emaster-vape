@extends('layouts.master')

@section('title', 'Users')

@section('stylesheets')
	<link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/css/pages/admin/admin.css' : '/css/pages/admin/admin.css') }}">
	<link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/css/pages/users/users.css' : '/css/pages/users/users.css') }}">
@endsection

@section('content')
	<div id="wrapper">
		@include('admin.layouts.partials._topnav')
		@include('admin.layouts.partials._sidenav')

		<!-- Admin Breadcrumb-->
		<div id="admin-breadcrumb">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h2>Users</h2>
					<ul class="breadcrumbs" style="text-align: left;">
					  <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
					  <li class="separator">&nbsp; </li>
					  <li><a href="{{ route('categories') }}">Categories</a></li>
            <li class="separator">&nbsp; </li>
            <li><a href="{{ route('products') }}">Products</a></li>
            <li class="separator">&nbsp; </li>
            <li class="active"><a href="{{ route('users') }}" class="active">Users</a></li>
					</ul>
				</div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <h4 class="text-right">{{ $users->total() }}{{ $users->total() <= 1 ? ' total user' : ' total users'}}</h4>
          <p class="text-right">({{ $users->count() }}){{ $users->count() <= 1 ? ' user' : ' users'}} in this page</p>
        </div>
			</div>
		</div>
		<!-- /Admin Breadcrumb -->

		<!-- Content -->
		<div id="content-wrapper">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          @foreach($users as $user)
            <div class="card bg-secondary">
              <ul class="list-unstyled">
                <li class="media">
                  <img src="../img/components/img13.jpg" alt="" class="d-flex rounded-circle align-self-end mr-3" width="64">
                  <div class="media-body">
                    <div class="row">
                      <div class="col-lg-10 col-md-9">
                        <h6 class="mb-1 mt-2">{{ $user->first_name }} {{ $user->last_name }}</h6>
                      </div>
                      <div class="col-lg-2 col-md-3">
                        <span class="d-block text-sm"><i>Joined {{ $user->created_at->diffForHumans() }}</i></span>
                      </div>
                      <div class="col-lg-12 col-md-12">
                        <span class="d-block text-sm text-muted">{{ $user->email }}</span>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          @endforeach
          {{ $users->links() }}
        </div>
      </div>
		</div>
		<!-- /Content -->
	</div>
	<!-- /wrapper -->
@endsection

@section('scripts')
  <script src="{{ asset(App::environment('production') ? 'public/js/classes/user.js' : '/js/classes/user.js') }}"></script>
	<script src="{{ asset(App::environment('production') ? 'public/js/pages/users.js' : '/js/pages/users/users.js') }}"></script>
@endsection