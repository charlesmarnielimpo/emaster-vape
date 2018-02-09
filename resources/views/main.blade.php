@extends('layouts.master')

@section('title', 'Welcome to E-Master Vape')

  @section('content')
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Content-->
      <!-- Category-->
      <div class="container-fluid px-0">
        <div class="row mx-0">
          <!-- Category-->
          @foreach($categories as $category)
            <div class="category-card col-md-6 col-sm-12 fw-section padding-top-7x padding-bottom-7x" style="background-image: url({{ asset(App::environment('production') ? '/public/img/categories/'.$category->category_name.'.jpg' : '/img/categories/'.$category->category_name.'.jpg') }});">
              <span class="overlay" style="background-color: #000; opacity: .5;"></span>
              <div class="d-flex justify-content-center">
                <div class="px-3 text-center">
                  <h2 class="display-4 text-white text-shadow">{{ $category->category_name }}</h2>
                  <h5 class="text-white text-normal mb-3 opacity-60 text-shadow">Starting from $56.00</h5>
                  <div class="view-button"><a class="btn btn-primary" href="shop-grid-ls.html">View Collection</a></div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <!-- Featured Products (Grid)-->
      <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">Featured Products</h3>
        <div class="isotope-grid cols-4 mb-2">
          <div class="gutter-sizer"></div>
          <div class="grid-sizer"></div>
          <!-- Product-->
          @foreach($products as $product)
            <div class="grid-item">
              <div class="product-card">
                <div class="product-badge text-danger">50% Off</div>
                  <a class="product-thumb" href="#">
                    <img src="{{ asset(App::environment('production') ? '/public/img/products/'.$product->slug.'.png' : '/img/products/'.$product->slug.'.png') }}" alt="Product">
                  </a>
                <h3 class="product-title"><a href="#">{{ $product->name }}</a></h3>
                <h4 class="product-price">
                  <del>Php 99.99</del>Php {{ $product->priceFormat() }}
                </h4>
                <div class="product-buttons">
                  <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Wishlist">
                    <i class="icon-heart"></i>
                  </button>
                  <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="shop-grid-ls.html">View All Products</a></div>
      </section>
      <!-- Product Widgets-->
      <section class="container padding-bottom-2x">
        <h3 class="text-center mb-30">Staff Picks</h3>
        <div class="row pt-1">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-featured-products">
              <h3 class="widget-title">Top Sellers</h3>
              @foreach($topsellers as $topseller)
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb">
                    <a href="#">
                      <img src="{{ asset(App::environment('production') ? '/public/img/products/'.$topseller->slug.'.png' : '/img/products/'.$topseller->slug.'.png') }}" alt="Product">
                    </a>
                  </div>
                  <div class="entry-content">
                    <h4 class="entry-title">
                      <a href="#">{{ $topseller->name }}</a>
                    </h4>
                    <span class="entry-meta">Php {{ $topseller->priceFormat() }}</span>
                  </div>
                </div>
              @endforeach
              <a class="btn btn-outline-secondary btn-sm mb-0" href="shop-grid-ls.html">View More</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-featured-products">
              <h3 class="widget-title">New Arrivals</h3>
              @foreach($newarrivals as $newarrival)
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb">
                    <a href="#">
                      <img src="{{ asset(App::environment('production') ? '/public/img/products/'.$newarrival->slug.'.png' : '/img/products/'.$newarrival->slug.'.png') }}" alt="Product">
                    </a>
                  </div>
                  <div class="entry-content">
                    <h4 class="entry-title">
                      <a href="#">{{ $newarrival->name }}</a>
                    </h4>
                    <span class="entry-meta">Php {{ $newarrival->priceFormat() }}</span>
                  </div>
                </div>
              @endforeach
              <a class="btn btn-outline-secondary btn-sm mb-0" href="shop-grid-ls.html">View More</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-featured-products">
              <h3 class="widget-title">Best Rated</h3>
              @foreach($bestrateds as $bestrated)
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb">
                    <a href="#">
                      <img src="{{ asset(App::environment('production') ? '/public/img/products/'.$bestrated->slug.'.png' : '/img/products/'.$bestrated->slug.'.png') }}" alt="Product">
                    </a>
                  </div>
                  <div class="entry-content">
                    <h4 class="entry-title">
                      <a href="#">{{ $bestrated->name }}</a>
                    </h4>
                    <span class="entry-meta">Php {{ $bestrated->priceFormat() }}</span>
                  </div>
                </div>
              @endforeach
              <a class="btn btn-outline-secondary btn-sm mb-0" href="shop-grid-ls.html">View More</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Popular Brands-->
      <section class="bg-faded padding-top-3x padding-bottom-3x">
        <div class="container">
          <h3 class="text-center mb-30 pb-2">Popular Brands</h3>
          <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/1.png @else img/brands/1.png @endif" alt="Adidas">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/2.png @else img/brands/2.png @endif" alt="Brooks">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/3.png @else img/brands/3.png @endif" alt="Valentino">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/4.png @else img/brands/4.png @endif" alt="Nike">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/5.png @else img/brands/5.png @endif" alt="Puma">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/6.png @else img/brands/6.png @endif" alt="New Balance">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/7.png @else img/brands/7.png @endif" alt="Dior"></div>
        </div>
      </section>
      <!-- Services-->
      <section class="container padding-top-3x padding-bottom-2x">
        <div class="row">
          <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="@if(App::environment('production')) public/img/services/01.png @else img/services/01.png @endif" alt="Shipping">
            <h6>Free Worldwide Shipping</h6>
            <p class="text-muted margin-bottom-none">Free shipping for all orders over Php 5000.00</p>
          </div>
          <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="@if(App::environment('production')) public/img/services/02.png @else img/services/02.png @endif" alt="Money Back">
            <h6>Money Back Guarantee</h6>
            <p class="text-muted margin-bottom-none">We return money within 30 days</p>
          </div>
          <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="@if(App::environment('production')) public/img/services/03.png @else img/services/03.png @endif" alt="Support">
            <h6>24/7 Customer Support</h6>
            <p class="text-muted margin-bottom-none">Friendly 24/7 customer support</p>
          </div>
          <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="@if(App::environment('production')) public/img/services/04.png @else img/services/04.png @endif" alt="Payment">
            <h6>Secure Online Payment</h6>
            <p class="text-muted margin-bottom-none">We posess SSL / Secure Certificate</p>
          </div>
        </div>
      </section>
    </div>
  @endsection