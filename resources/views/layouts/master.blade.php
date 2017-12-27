@include('layouts.partials._header')

@yield('stylesheets')

<body>
	@if(!Request::is('admin/*'))
		@include('layouts.partials._sidebar')
		@include('layouts.partials._topbar')
	@endif

	@yield('content')
		
	@if(!Request::is('admin/*'))
		@include('layouts.partials._footer')
	@endif
	@include('layouts.partials._script')

	@yield('scripts')
</body>
</html>