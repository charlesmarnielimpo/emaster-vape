<!-- Admin Sidenav -->
<aside id="admin-sidenav">
	<div id="logo" style="text-align: center;">
		<img src="{{ asset('/img/logo/logo.png') }}" alt="E-master Vape" width="65px">
	</div>
	<div id="sidenav">
		<p class="menu-label">General</p>
		<ul>
			<li>
				<a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
			</li>
			<li>
				<a href="{{ route('categories') }}"><i class="fa fa-list"></i>&nbsp; Categories</a>
			</li>
			<li>
				<a href="{{ route('users')}}"><i class="fa fa-users"></i>&nbsp; Users</a>
			</li>
		</ul>
	</div>
</aside>
<!-- /Admin Sidenav -->