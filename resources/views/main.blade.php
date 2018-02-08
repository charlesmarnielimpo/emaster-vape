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
          <div class="category-card col-md-6 col-sm-12 fw-section padding-top-7x padding-bottom-7x" style="background-image: url({{ asset(App::environment('production') ? '/public/img/vaporizers/home-vaporizer-background.jpg' : '/img/vaporizers/home-vaporizer-background.jpg') }});"><span class="overlay" style="background-color: #000; opacity: .5;"></span>
            <div class="d-flex justify-content-center">
              <div class="px-3 text-center">
                <h2 class="display-4 text-white text-shadow">Vaporizers</h2>
                <h5 class="text-white text-normal mb-3 opacity-60 text-shadow">Starting from $56.00</h5>
                <div class="view-button"><a class="btn btn-primary" href="shop-grid-ls.html">View Collection</a></div>
              </div>
            </div>
          </div>
          <!-- Category-->
          <div class="category-card col-md-6 col-sm-12 fw-section padding-top-7x padding-bottom-7x" style="background-image: url({{ asset(App::environment('production') ? '/public/img/liquids/home-liquid-background.jpg' : '/img/liquids/home-liquid-background.jpg') }});"><span class="overlay" style="background-color: #000; opacity: .5;"></span>
            <div class="d-flex justify-content-center">
              <div class="px-3 text-center">
                <h2 class="display-4 text-white text-shadow">Liquids</h2>
                <h5 class="text-white text-normal mb-3 opacity-60 text-shadow">Starting from $27.00</h5>
                <div class="view-button"><a class="btn btn-primary" href="shop-grid-ls.html">View Collection</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mx-0">
          <!-- Category-->
          <div class="category-card col-md-6 col-sm-12 fw-section padding-top-7x padding-bottom-7x" style="background-image: url({{ asset(App::environment('production') ? '/public/img/tanks/home-tank-background.png' : '/img/tanks/home-tank-background.png') }});"><span class="overlay" style="background-color: #000; opacity: .5;"></span>
            <div class="d-flex justify-content-center">
              <div class="px-3 text-center">
                <h2 class="display-4 text-white text-shadow">Tanks</h2>
                <h5 class="text-white text-normal mb-3 opacity-60 text-shadow">Starting from $35.99</h5>
                <div class="view-button"><a class="btn btn-primary" href="shop-grid-ls.html">View Collection</a></div>
              </div>
            </div>
          </div>
          <!-- Category-->
          <div class="category-card col-md-6 col-sm-12 fw-section padding-top-7x padding-bottom-7x" style="background-image: url({{ asset(App::environment('production') ? '/public/img/accessories/home-accessory-background.jpg' : '/img/accessories/home-accessory-background.jpg') }});"><span class="overlay" style="background-color: #000; opacity: .5;"></span>
            <div class="d-flex justify-content-center">
              <div class="px-3 text-center">
                <h2 class="display-4 text-white text-shadow">Accessories</h2>
                <h5 class="text-white text-normal mb-3 opacity-60 text-shadow">Starting from $79.99.00</h5>
                <div class="view-button"><a class="btn btn-primary" href="shop-grid-ls.html">View Collection</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Featured Products (Grid)-->
      <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">Featured Products</h3>
        <div class="isotope-grid cols-4 mb-2">
          <div class="gutter-sizer"></div>
          <div class="grid-sizer"></div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger">50% Off</div><a class="product-thumb" href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/cloud-beast-prince.png' : '/img/products/cloud-beast-prince.png') }}" alt="Product"></a>
              <h3 class="product-title"><a href="#">Cloud Beast Prince</a></h3>
              <h4 class="product-price">
                <del>$99.99</del>$49.99
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Wishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/stick-v8.png' : '/img/products/stick-v8.png') }}" alt="Product"></a>
              <h3 class="product-title"><a href="#">Stick-V8</a></h3>
              <h4 class="product-price">$200.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Wishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                </div><a class="product-thumb" href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/G-PRIV2.png' : '/img/products/G-PRIV2.png') }}" alt="Product"></a>
              <h3 class="product-title"><a href="#">G-PRIV2</a></h3>
              <h4 class="product-price">$155.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Wishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/battery.png' : '/img/products/battery.png') }}" alt="Product"></a>
              <h3 class="product-title"><a href="#">Battery</a></h3>
              <h4 class="product-price">$47.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Wishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i><i class="icon-star"></i>
                </div><a class="product-thumb" href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/battery-cover.png' : '/img/products/battery-cover.png') }}" alt="Product"></a>
              <h3 class="product-title"><a href="#">Battery Cover</a></h3>
              <h4 class="product-price">$65.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Wishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger">40% Off</div><a class="product-thumb" href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/TFV8-big-family.png' : '/img/products/TFV8-big-family.png') }}" alt="Product"></a>
              <h3 class="product-title"><a href="#">TFV8 Big Family</a></h3>
              <h4 class="product-price">
                <del>$60.00</del>$36.00
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Wishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/vape-pen-tank-big-family.png' : '/img/products/vape-pen-tank-big-family.png') }}" alt="Product"></a>
              <h3 class="product-title"><a href="#">Vape Pen Tank Big Family</a></h3>
              <h4 class="product-price">$69.99</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Wishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-muted">Out of stock</div><a class="product-thumb" href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/TFV8-big-baby-light-edition.png' : '/img/products/TFV8-big-baby-light-edition.png') }}" alt="Product"></a>
              <h3 class="product-title"><a href="#">TFV8 Big Baby Light Edition</a></h3>
              <h4 class="product-price">$128.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Wishlist"><i class="icon-heart"></i></button><a class="btn btn-outline-secondary btn-sm" href="#">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="shop-grid-ls.html">View All Products</a></div>
      </section>
      <!-- Promo-->
      <section class="fw-section" style="background-image: url({{ asset(App::environment('production') ? 'public/img/banners/home03.jpg' : '/img/banners/home03.jpg') }});"><span class="overlay" style="background-color: #374250; opacity: .55;"></span>
        <div class="container text-center padding-top-4x padding-bottom-4x">
          <h3 class="display-4 text-normal text-white text-shadow mb-1">Old Collection</h3>
          <h2 class="display-2 text-bold text-white text-shadow">HUGE SALE!</h2>
          <h4 class="d-inline-block h2 text-normal text-white text-shadow border-default border-left-0 border-right-0 mb-4">at our outlet stores</h4><br><a class="btn btn-primary" href="contacts.html">Locate Stores</a>
        </div>
      </section>
      <!-- Product Widgets-->
      <section class="container padding-top-3x padding-bottom-2x">
        <h3 class="text-center mb-30">Staff Picks</h3>
        <div class="row pt-1">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-featured-products">
              <h3 class="widget-title">Top Sellers</h3>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/cloud-beast-prince.png' : '/img/products/cloud-beast-prince.png') }}" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="#">Cloud Beast Prince</a></h4><span class="entry-meta">$155.00</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/stick-v8.png' : '/img/products/stick-v8.png') }}" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="#">Stick V8</a></h4><span class="entry-meta">$49.50</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/G-PRIV2.png' : '/img/products/G-PRIV2.png') }}" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="#">G-PRIV2</a></h4><span class="entry-meta">$29.99</span>
                </div>
              </div><a class="btn btn-outline-secondary btn-sm mb-0" href="shop-grid-ls.html">View More</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-featured-products">
              <h3 class="widget-title">New Arrivals</h3>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/battery.png' : '/img/products/battery.png') }}" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="#">Battery</a></h4><span class="entry-meta">$49.99</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/battery-cover.png' : '/img/products/battery-cover.png') }}" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="#">Battery Cover</a></h4><span class="entry-meta">$200.00</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/vape-pen-tank-big-family.png' : '/img/products/vape-pen-tank-big-family.png') }}" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="#">Vape Pen Tank Big Family</a></h4><span class="entry-meta">$145.00</span>
                </div>
              </div><a class="btn btn-outline-secondary btn-sm mb-0" href="shop-grid-ls.html">View More</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-featured-products">
              <h3 class="widget-title">Best Rated</h3>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/TFV8-big-baby-light-edition.png' : '/img/products/TFV8-big-baby-light-edition.png') }}" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="#">TFV8 Big Baby Light Edition</a></h4><span class="entry-meta">$65.00</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/cloud-beast-prince.png' : '/img/products/cloud-beast-prince.png') }}" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="#">Cloud Beast Prince</a></h4><span class="entry-meta">$36.99</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="#"><img src="{{ asset(App::environment('production') ? '/public/img/products/battery.png' : '/img/products/battery.png') }}" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="#">Battery</a></h4><span class="entry-meta">$128.00</span>
                </div>
              </div><a class="btn btn-outline-secondary btn-sm mb-0" href="shop-grid-ls.html">View More</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Popular Brands-->
      <section class="bg-faded padding-top-3x padding-bottom-3x">
        <div class="container">
          <h3 class="text-center mb-30 pb-2">Popular Brands</h3>
          <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/01.png @else img/brands/01.png @endif" alt="Adidas">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/02.png @else img/brands/02.png @endif" alt="Brooks">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/03.png @else img/brands/03.png @endif" alt="Valentino">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/04.png @else img/brands/04.png @endif" alt="Nike">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/05.png @else img/brands/05.png @endif" alt="Puma">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/06.png @else img/brands/06.png @endif" alt="New Balance">
            <img class="d-block w-110 opacity-75 m-auto" src="@if(App::environment('production')) public/img/brands/07.png @else img/brands/07.png @endif" alt="Dior"></div>
        </div>
      </section>
      <!-- Services-->
      <section class="container padding-top-3x padding-bottom-2x">
        <div class="row">
          <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="@if(App::environment('production')) public/img/services/01.png @else img/services/01.png @endif" alt="Shipping">
            <h6>Free Worldwide Shipping</h6>
            <p class="text-muted margin-bottom-none">Free shipping for all orders over $100</p>
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