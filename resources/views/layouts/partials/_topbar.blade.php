<div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="account-orders.html">
  <div class="user-ava"><img src="{{ asset('/img/account/user-ava-md.jpg') }}" alt="Daniel Adams">
  </div>
  <div class="user-info">
    <h6 class="user-name">Daniel Adams</h6><span class="text-sm text-white opacity-60">290 Reward points</span>
  </div></a>
  <nav class="offcanvas-menu">
    <ul class="menu">
      <li class="has-children active"><span><a href="#"><span>Home</span></a></li>
      <li class="has-children"><span><a href="#"><span>Vaporizers</span></a></li>
      <li class="has-children"><span><a href="#"><span>Liquids</span></a></li>
      <li class="has-children"><span><a href="#">Tanks</a></li>
      <li class="has-children"><span><a href="#"><span>Accessories</span></a></li>
    </ul>
  </nav>
</div>
<!-- Topbar-->
<div class="topbar">
  <div class="topbar-column"><a class="hidden-md-down" href="mailto:support@unishop.com"><i class="icon-mail"></i>&nbsp; support@unishop.com</a><a class="hidden-md-down" href="tel:00331697720"><i class="icon-bell"></i>&nbsp; 00 33 169 7720</a><a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a><a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>
  </div>
</div>
<!-- Navbar-->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
<header class="navbar navbar-sticky">
  <!-- Search-->
  <form class="site-search" method="get">
    <input type="text" name="site_search" placeholder="Type to search...">
    <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
  </form>
  <div class="site-branding">
    <div class="inner">
      <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
      <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
      <!-- Site Logo-->
      <a class="site-logo" href="{{ url('/') }}"><img src="{{ asset('/img/logo/logo.png') }}" alt="E-Master Vape" style="width: 50px;"></a>
    </div>
  </div>
  <!-- Main Navigation-->
  <nav class="site-menu">
    <ul>
      <li class="active"><a href="#"><span>Home</span></a></li>
      <li><a href="#"><span>Vaporizers</span></a></li>
      <li><a href="#"><span>Liquids</span></a></li>
      <li><a href="#"><span>Tanks</span></a></li>
      <li><a href="#"><span>Accessories</span></a></li>
    </ul>
  </nav>
  <!-- Toolbar-->
  <div class="toolbar">
    <div class="inner">
      <div class="tools">
        <div class="search"><i class="icon-search"></i></div>
        <div class="account"><a href="#"></a><i class="icon-head"></i>
          <ul class="toolbar-dropdown">
            @if(Auth::check()) 
              <li class="sub-menu-user">
                <div class="user-ava"><img src="{{ asset('/img/account/user-ava-sm.jpg') }}" alt="Daniel Adams">
                </div>
                <div class="user-info">
                  <h6 class="user-name">{{ Auth::user()->first_name. ' ' .Auth::user()->last_name}}</h6><span class="text-xs text-muted">290 Reward points</span>
                </div>
              </li>
                <li><a href="#"><i class="icon icon-head"></i>My Profile</a></li>
                <li><a href="#"><i class="icon icon-bag"></i>Orders List</a></li>
                <li><a href="#"><i class="icon icon-heart"></i>Wishlist</a></li>
              <li class="sub-menu-separator"></li>
              <li><a href="{{ url('/logout') }}"> <i class="icon-unlock"></i>Logout</a></li>
            @else
              <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i></i>&nbsp; Login</a></li>
              <li><a href="{{ route('register') }}"><i class="fa fa-pencil-square-o"></i>&nbsp; Register</a></li>
            @endif
          </ul>
        </div>
        <div class="cart"><a href="cart.html"></a><i class="icon-bag"></i><span class="count">3</span><span class="subtotal">$289.68</span>
          <div class="toolbar-dropdown">
            <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="{{ asset('/img/cart-dropdown/01.jpg') }}" alt="Product"></a>
              <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Unionbay Park</a><span class="dropdown-product-details">1 x $43.90</span></div>
            </div>
            <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="{{ asset('/img/cart-dropdown/02.jpg') }}" alt="Product"></a>
              <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Daily Fabric Cap</a><span class="dropdown-product-details">2 x $24.89</span></div>
            </div>
            <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="{{ asset('/img/cart-dropdown/03.jpg') }}" alt="Product"></a>
              <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Haan Crossbody</a><span class="dropdown-product-details">1 x $200.00</span></div>
            </div>
            <div class="toolbar-dropdown-group">
              <div class="column"><span class="text-lg">Total:</span></div>
              <div class="column text-right"><span class="text-lg text-medium">$289.68&nbsp;</span></div>
            </div>
            <div class="toolbar-dropdown-group">
              <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="#">View Cart</a></div>
              <div class="column"><a class="btn btn-sm btn-block btn-success" href="#">Checkout</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>