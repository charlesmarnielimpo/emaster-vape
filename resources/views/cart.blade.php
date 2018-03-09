@extends('layouts.master')

@section('title', 'Cart')

@section('stylesheets')
  <link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/plugins/toastr/toastr.min.css' : 'plugins/toastr/toastr.min.css') }}">
@endsection

@section('content')
  <!-- Off-Canvas Wrapper-->
  <div class="offcanvas-wrapper">
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Cart</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li>
              <a href="{{ route('main.index') }}">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>
              <a href="{{ route('cart.index') }}">Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
      <!-- Alert-->
      @if(session()->has('success_message'))
        <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x">
          <span class="alert-close" data-dismiss="alert"></span>
          <i class="fa fa-check fa-2x"></i>&nbsp;
          <strong>Success! </strong> {{ session()->get('success_message') }}
        </div>
      @endif
      @if(session()->has('error_message'))
        <div class="alert alert-danger alert-dismissible fade show text-center margin-bottom-1x">
          <span class="alert-close" data-dismiss="alert"></span>
          <i class="fa fa-times fa-2x"></i>&nbsp;
          <strong>Error! </strong> {{ session()->get('error_message') }}
        </div>
      @endif
      <!-- Shopping Cart-->
      <div class="table-responsive shopping-cart">
        <table class="table">
          <thead>
            <tr>
              <th width="40%">Product Name</th>
              <th class="text-center">Quantity</th>
              <th class="text-center">Price</th>
              {{-- <th class="text-center">Subtotal</th> --}}
              {{-- <th class="text-center">Discount</th> --}}
              <th class="text-center">
                <a class="btn btn-sm btn-outline-danger" href="{{ route('cart.empty') }}" id="btn-cart-empty">Clear Cart</a>
              </th>
            </tr>
          </thead>
          <tbody>
            @if(Cart::count() > 0)
              @foreach(Cart::content() as $item)
                <tr>
                  <td>
                    <div class="product-item">
                      <a class="product-thumb" href="{{ route('shop.show', $item->model->slug) }}">
                        <img src="{{ asset(App::environment('production') ? $item->model->product_image->first()->url : substr($item->model->product_image->first()->url, 6, 60)) }}" alt="{{ $item->name }}">
                      </a>
                      <div class="product-info">
                        <h4 class="product-title">
                          <a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->name }}</a>
                        </h4>
                        <span>{{ $item->model->details }}</span>
                      </div>
                    </div>
                  </td>
                  <td class="text-center">
                    <div class="count-input">
                      <select class="form-control quantity" name="quantity" data-id="{{ $item->rowId }}">
                        @for($i = 1; $i < 6; $i++)
                          <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                      </select>
                    </div>
                  </td>
                  <td class="text-center text-lg text-medium">${{ $item->model->priceFormat() }}</td>
                  {{-- <td class="text-center text-lg text-medium">${{ Cart::subtotal() }}</td> --}}
                  {{-- <td class="text-center text-lg text-medium">--</td> --}}
                  <td class="text-center">
                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" class="remove-from-cart btn-link" style="background: transparent; cursor: pointer; border: none;" data-toggle="tooltip" title="Remove item">
                        <i class="icon-cross"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            @else
              <tr class="text-center">
                <td colspan="6">No item(s) in your cart.</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
      <div class="shopping-cart-footer">
        <div class="column" id="coupon-footer">
          <form class="coupon-form" method="post">
            <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required>
            <button class="btn btn-outline-primary btn-sm" type="submit" id="btn-cart-coupon">Apply Coupon</button>
          </form>
        </div>
        <div class="column text-lg">
          <div class="column">
            <div class="row">
              <div class="col-md-8">
                Subtotal: 
              </div>
              <div class="col-md-4">
                <span class="text-medium">${{ Cart::subtotal() }}</span>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="row">
              <div class="col-md-8">
                Tax(12%): 
              </div>
              <div class="col-md-4">
                <span class="text-medium">${{ Cart::tax() }}</span>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="row">
              <div class="col-md-8">
                Total: 
              </div>
              <div class="col-md-4">
                <span class="text-medium">${{ Cart::total() }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shopping-cart-footer">
        <div class="column">
          <a class="btn btn-outline-secondary" href="{{ route('shop.index') }}">
            <i class="icon-arrow-left"></i>&nbsp;Back to Shopping
          </a> 
        </div>
        <div class="column">
          {{-- <form action="{{ route('payment') }}" method="post"> --}}
            {{-- <button type="submit" class="btn btn-success">Checkout</button> --}}
          {{-- </form> --}}
          <a href="{{ route('checkout') }}" class="btn btn-success">Checkout</a>
        </div>
      </div>
      <!-- Related Products Carousel-->
      <h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">You May Also Like</h3>
      <!-- Carousel-->
      <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
        @foreach($youMayAlsoLike as $item) 
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger">22% Off</div>
              <a class="product-thumb" href="{{ route('shop.show', $item->slug) }}">
                <img src="{{ asset(App::environment('production') ? $item->product_image->first()->url : substr($item->product_image->first()->url, 6, 60)) }}" alt="{{ $item->name }}" style="height:200px; width:100%;">
              </a>
              <h3 class="product-title">
                <a href="{{ route('shop.show', $item->slug) }}">{{ $item->name }}</a>
              </h3>
              <h4 class="product-price">
                {{-- <del>$44.95</del> --}}
                ${{ $item->priceFormat() }}
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Wishlist">
                  <i class="icon-heart"></i>
                </button>
                <form action="{{ route('cart.store') }}" method="POST" style="display: inline-block;">
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value="{{ $item->id}}">
                  <input type="hidden" name="name" value="{{ $item->name}}">
                  <input type="hidden" name="price" value="{{ $item->price}}">
                  <button type="submit" class="btn btn-outline-primary btn-sm">Add to Cart</button>
                </form>
              </div>
            </div>
          </div> 
        @endforeach     
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  {{-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> --}}
  <script src="{{ asset(App::environment('production') ? 'public/plugins/toastr/toastr.min.js' : 'plugins/toastr/toastr.min.js' )}}"></script>
  <script>
    $('document').ready(function() {
      if ($('.text-medium').html() == '$0.00') {
        $('.text-lg').hide();
        $('#coupon-footer').hide();
        $('#btn-cart-empty').hide();
        $('#btn-cart-coupon').attr('disabled', 'disabled');
        // $('.btn-success').attr('disabled', 'disabled');
        $('.btn-success').hide();
      }

      var quantity = $('.quantity');

      quantity.each(function() {
        $(this).on('change', function() {
          var id = $(this).attr('data-id');
          var quantity = $(this).val();
          var CSRF = $("meta[name='csrf-token']").attr('content');

          data = { 
            _token: CSRF,
            quantity: quantity,
            id: id
          };

          $.ajax({
            url: '/cart/'+ id,
            type: 'POST',
            dataType: "json",
            data: data,
            success: function(data){
              // if (data.success ==  true) {
                // toastr.success('Item quantity was successfully updated.', 'Success!');
                // toastr.options = {
                //   "progressBar": true,
                // }
                window.location.href = "{{ route('cart.index') }}";
              // } else {
              //   toastr.error('Updating item quantity failed.', 'Error!');
              //   toastr.options = {
              //     "progressBar": true,
              //   }
              //   window.location.href = "{{ route('cart.index') }}";
              // }
            }, error:function (xhr, error, ajaxOptions, thrownError){
              console.log(xhr.responseText);
            }
          });
        });
      });
    });
  </script>
  {{-- <script>
    (function() {
      const className = document.querySelectorAll('.quantity');

      Array.from(className).forEach(function(element) {
        const id = element.getAttribute('data-id');
        element.addEventListener('change', function() {
          axios.patch(`/cart/${id}`, {
            quantity: this.value
          })
          .then(function (response) {
            // console.log(response);
            toastr.success('Item quantity was successfully updated.', 'Success!');
            toastr.options = {
              "progressBar": true,
            }
            window.location.href = "{{ route('cart.index') }}"
          })
          .catch(function (error) {
            console.log(error);
          });        
        });
      });
    })();
  </script> --}}
@endsection