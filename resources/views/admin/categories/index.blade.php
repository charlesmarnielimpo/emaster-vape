@extends('layouts.master')

@section('title', 'Categories')

@section('stylesheets')
	<link rel="stylesheet" href="{{ asset('/css/pages/admin/admin.css') }}">
@endsection

@section('content')
	<div id="wrapper">
		@include('admin.layouts.partials._topnav')
		@include('admin.layouts.partials._breadcrumb')
		@include('admin.layouts.partials._sidenav')

		<!-- Content -->
		<div id="content-wrapper">
			asd
		</div>
		<!-- /Content -->
	</div>
@endsection

@section('scripts')

@endsection