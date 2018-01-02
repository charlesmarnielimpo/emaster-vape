@extends('layouts.master')

@section('title', 'Categories')

@section('stylesheets')
	<link rel="stylesheet" href="{{ asset('/css/pages/admin/admin.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/pages/users/users.css') }}">
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
            <div class="card bg-secondary md-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-9 col-md-7">
                    <h4 class="card-title">{{ $user->first_name}} {{ $user->last_name }}</h4>
                  </div>
                  <div class="col-lg-3 col-md-5">
                    <p class="card-text"><i>Joined {{ $user->created_at->diffForHumans() }}</i></p>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <p class="card-text">{{ $user->email }}</p>
                  </div>
                </div>
              </div>
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
  <script src="{{ asset('/js/classes/user.js') }}"></script>
	<script src="{{ asset('/js/pages/users/users.js') }}"></script>
@endsection