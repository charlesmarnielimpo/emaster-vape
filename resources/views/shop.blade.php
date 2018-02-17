@extends('layouts.master')

@section('title', 'Shop')

@section('stylesheets')
  <link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/css/shop.css' : '/css/shop.css') }}">
@endsection

@section('content')
  <!-- Off-Canvas Wrapper-->
  <div class="offcanvas-wrapper">
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Shop</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li>
              <a href="{{ route('main.index') }}">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>
              <a href="{{ route('shop.index') }}">Shop</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>
              <a href="#">{{ $categoryName }}</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
      <div class="row">
        <!-- Products-->
        <div class="col-xl-9 col-lg-8 order-lg-2">
          <!-- Shop Toolbar-->
          <div class="shop-toolbar padding-bottom-1x mb-2">
            <div class="column">
              <div class="shop-sorting">
                <label for="sorting">Sort by:</label>
                <select class="form-control" id="sorting">
                  <option>Popularity</option>
                  <option>Low - High Price</option>
                  <option>High - Low Price</option>
                  <option>Avarage Rating</option>
                  <option>A - Z Order</option>
                  <option>Z - A Order</option>
                </select><span class="text-muted">Showing:&nbsp;</span>
                <span> 
                  @if($products->count() < 1) 
                    {{ $products->count() }} item(s)
                  @else 
                    1 - {{ $products->count() }} item(s)
                  @endif
                </span>
              </div>
            </div>
            <div class="column">
              <div class="shop-view"><a class="grid-view active" href="#"><span></span><span></span><span></span></a><a class="list-view" href="#"><span></span><span></span><span></span></a></div>
            </div>
          </div>
          <!-- Products Grid-->
          <div class="isotope-grid cols-3 mb-2">
            <div class="gutter-sizer"></div>
            <div class="grid-sizer"></div>
            @forelse ($products as $product)
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">
                  <div class="rating-stars">
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                  </div>
                  <a class="product-thumb" href="{{ route('shop.show', $product->slug) }}">
                    <img src="{{ asset(App::environment('production') ? 'public/img/products/'.$product->slug.'.png' : 'img/products/'.$product->slug.'.png') }}" alt="{{ $product->name }}">
                  </a>
                  <h3 class="product-title">
                    <a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a>
                  </h3>
                  <h4 class="product-price">${{ $product->priceFormat() }}</h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Wishlist">
                      <i class="icon-heart"></i>
                    </button>
                    <form action="{{ route('cart.store') }}" method="POST" style="display: inline-block;">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{ $product->id}}">
                      <input type="hidden" name="name" value="{{ $product->name}}">
                      <input type="hidden" name="price" value="{{ $product->price}}">
                      <button type="submit" class="btn btn-outline-primary btn-sm">Add to Cart</button>
                    </form>
                  </div>
                </div>
              </div>
            @empty
              <div>No item(s) available</div>
            @endforelse
          </div>
          <!-- Pagination-->
          {{ $products->links() }}
        </div>
        <!-- Sidebar -->
        <div class="col-xl-3 col-lg-4 order-lg-1">
          <aside class="sidebar">
            <div class="padding-top-2x hidden-lg-up"></div>
            <!-- Widget Categories-->
            <section class="widget widget-categories">
              <h3 class="widget-title">Shop Categories</h3>
              <ul>
                @foreach($categories as $category)
                  <li class="has-children expanded">
                    <a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a><span>({{ $category->products_count }})</span>
                  </li>
                @endforeach
              </ul>
            </section>
            <!-- Widget Price Range-->
            <section class="widget widget-categories">
              <h3 class="widget-title">Price Range</h3>
              <form class="price-range-slider" method="post" data-start-min="250" data-start-max="650" data-min="0" data-max="1000" data-step="1">
                <div class="ui-range-slider"></div>
                <footer class="ui-range-slider-footer">
                  <div class="column">
                    <button class="btn btn-outline-primary btn-sm" type="submit">Filter</button>
                  </div>
                  <div class="column">
                    <div class="ui-range-values">
                      <div class="ui-range-value-min">$<span></span>
                        <input type="hidden">
                      </div>&nbsp;-&nbsp;
                      <div class="ui-range-value-max">$<span></span>
                        <input type="hidden">
                      </div>
                    </div>
                  </div>
                </footer>
              </form>
            </section>
            {{-- <!-- Widget Brand Filter-->
            <section class="widget">
              <h3 class="widget-title">Filter by Brand</h3>
              <label class="custom-control custom-checkbox d-block">
                <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Adidas&nbsp;<span class="text-muted">(254)</span></span>
              </label>
              <label class="custom-control custom-checkbox d-block">
                <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Bilabong&nbsp;<span class="text-muted">(39)</span></span>
              </label>
              <label class="custom-control custom-checkbox d-block">
                <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Calvin Klein&nbsp;<span class="text-muted">(128)</span></span>
              </label>
              <label class="custom-control custom-checkbox d-block">
                <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Nike&nbsp;<span class="text-muted">(310)</span></span>
              </label>
              <label class="custom-control custom-checkbox d-block">
                <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Tommy Bahama&nbsp;<span class="text-muted">(42)</span></span>
              </label>
            </section>
            <!-- Widget Size Filter-->
            <section class="widget">
              <h3 class="widget-title">Filter by Size</h3>
              <label class="custom-control custom-checkbox d-block">
                <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">XL&nbsp;<span class="text-muted">(208)</span></span>
              </label>
              <label class="custom-control custom-checkbox d-block">
                <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">L&nbsp;<span class="text-muted">(311)</span></span>
              </label>
              <label class="custom-control custom-checkbox d-block">
                <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">M&nbsp;<span class="text-muted">(485)</span></span>
              </label>
              <label class="custom-control custom-checkbox d-block">
                <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">S&nbsp;<span class="text-muted">(213)</span></span>
              </label>
            </section> --}}
            <!-- Promo Banner-->
            <section class="promo-box" style="background-image: url(img/banners/02.jpg);">
              <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
              <div class="promo-box-content text-center padding-top-3x padding-bottom-2x">
                <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                <h3 class="text-bold text-light text-shadow">Sunglassess</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
              </div>
            </section>
          </aside>
        </div>
      </div>
    </div>
  </div>
@endsection
