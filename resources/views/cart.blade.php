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
      <div class="alert alert-info alert-dismissible fade show text-center" style="margin-bottom: 30px;">
        <span class="alert-close" data-dismiss="alert"></span>
          <img class="d-inline align-center" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAzIDUxMi4wMDMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDMgNTEyLjAwMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE2cHgiPgo8Zz4KCTxnPgoJCTxnPgoJCQk8cGF0aCBkPSJNMjU2LjAwMSw2NGMtNzAuNTkyLDAtMTI4LDU3LjQwOC0xMjgsMTI4czU3LjQwOCwxMjgsMTI4LDEyOHMxMjgtNTcuNDA4LDEyOC0xMjhTMzI2LjU5Myw2NCwyNTYuMDAxLDY0eiAgICAgIE0yNTYuMDAxLDI5OC42NjdjLTU4LjgxNiwwLTEwNi42NjctNDcuODUxLTEwNi42NjctMTA2LjY2N1MxOTcuMTg1LDg1LjMzMywyNTYuMDAxLDg1LjMzM1MzNjIuNjY4LDEzMy4xODQsMzYyLjY2OCwxOTIgICAgIFMzMTQuODE3LDI5OC42NjcsMjU2LjAwMSwyOTguNjY3eiIgZmlsbD0iIzUwYzZlOSIvPgoJCQk8cGF0aCBkPSJNMzg1LjY0NCwzMzMuMjA1YzM4LjIyOS0zNS4xMzYsNjIuMzU3LTg1LjMzMyw2Mi4zNTctMTQxLjIwNWMwLTEwNS44NTYtODYuMTIzLTE5Mi0xOTItMTkycy0xOTIsODYuMTQ0LTE5MiwxOTIgICAgIGMwLDU1Ljg1MSwyNC4xMjgsMTA2LjA2OSw2Mi4zMzYsMTQxLjE4NEw2NC42ODQsNDk3LjZjLTEuNTM2LDQuMTE3LTAuNDA1LDguNzI1LDIuODM3LDExLjY2OSAgICAgYzIuMDI3LDEuNzkyLDQuNTY1LDIuNzMxLDcuMTQ3LDIuNzMxYzEuNjIxLDAsMy4yNDMtMC4zNjMsNC43NzktMS4xMDlsNzkuNzg3LTM5Ljg5M2w1OC44NTksMzkuMjMyICAgICBjMi42ODgsMS43OTIsNi4xMDEsMi4yNCw5LjE5NSwxLjI4YzMuMDkzLTEuMDAzLDUuNTY4LTMuMzQ5LDYuNjk5LTYuNGwyMy4yOTYtNjIuMTQ0bDIwLjU4Nyw2MS43MzkgICAgIGMxLjA2NywzLjE1NywzLjU0MSw1LjYzMiw2LjY3Nyw2LjcyYzMuMTM2LDEuMDY3LDYuNTkyLDAuNjQsOS4zNjUtMS4yMTZsNTguODU5LTM5LjIzMmw3OS43ODcsMzkuODkzICAgICBjMS41MzYsMC43NjgsMy4xNTcsMS4xMzEsNC43NzksMS4xMzFjMi41ODEsMCw1LjEyLTAuOTM5LDcuMTI1LTIuNzUyYzMuMjY0LTIuOTIzLDQuMzczLTcuNTUyLDIuODM3LTExLjY2OUwzODUuNjQ0LDMzMy4yMDV6ICAgICAgTTI0Ni4wMTcsNDEyLjI2N2wtMjcuMjg1LDcyLjc0N2wtNTIuODIxLTM1LjJjLTMuMi0yLjExMi03LjMxNy0yLjM4OS0xMC42ODgtMC42NjFMOTQuMTg4LDQ3OS42OGw0OS41NzktMTMyLjIyNCAgICAgYzI2Ljg1OSwxOS40MzUsNTguNzk1LDMyLjIxMyw5My41NDcsMzUuNjA1TDI0Ni43LDQxMS4yQzI0Ni40ODcsNDExLjU2MywyNDYuMTY3LDQxMS44NCwyNDYuMDE3LDQxMi4yNjd6IE0yNTYuMDAxLDM2Mi42NjcgICAgIEMxNjEuOSwzNjIuNjY3LDg1LjMzNSwyODYuMTAxLDg1LjMzNSwxOTJTMTYxLjksMjEuMzMzLDI1Ni4wMDEsMjEuMzMzUzQyNi42NjgsOTcuODk5LDQyNi42NjgsMTkyICAgICBTMzUwLjEwMywzNjIuNjY3LDI1Ni4wMDEsMzYyLjY2N3ogTTM1Ni43NTksNDQ5LjEzMWMtMy40MTMtMS43MjgtNy41MDktMS40NzItMTAuNjg4LDAuNjYxbC01Mi4zNzMsMzQuOTIzbC0zMy42NDMtMTAwLjkyOCAgICAgYzQwLjM0MS0wLjg1Myw3Ny41ODktMTQuMTg3LDEwOC4xNi0zNi4zMzFsNDkuNTc5LDEzMi4yMDNMMzU2Ljc1OSw0NDkuMTMxeiIgZmlsbD0iIzUwYzZlOSIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" width="18" height="18" alt="Medal icon">&nbsp;&nbsp;With this purchase you will earn <strong>290</strong> Reward Points.
        </div>
      <!-- Shopping Cart-->
      <div class="table-responsive shopping-cart">
        <table class="table">
          <thead>
            <tr>
              <th width="40%">Product Name</th>
              <th class="text-center">Quantity</th>
              <th class="text-center">Price</th>
              <th class="text-center">Subtotal</th>
              <th class="text-center">Discount</th>
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
                        <img src="{{ asset(App::environment('production') ? 'public/img/products/'.$item->model->slug.'.png' : 'img/products/'.$item->model->slug.'.png') }}" alt="Product">
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
                  <td class="text-center text-lg text-medium">Php {{ $item->model->priceFormat() }}</td>
                  <td class="text-center text-lg text-medium">Php {{ Cart::subtotal() }}</td>
                  <td class="text-center text-lg text-medium">--</td>
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
        <div class="column">
          <form class="coupon-form" method="post">
            <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required>
            <button class="btn btn-outline-primary btn-sm" type="submit" id="btn-cart-coupon">Apply Coupon</button>
          </form>
        </div>
        <div class="column text-lg">Total: <span class="text-medium">Php {{ Cart::subtotal() }}</span></div>
      </div>
      <div class="shopping-cart-footer">
        <div class="column">
          <a class="btn btn-outline-secondary" href="{{ route('shop.index') }}">
            <i class="icon-arrow-left"></i>&nbsp;Back to Shopping
          </a>
        </div>
        <div class="column">
          <a class="btn btn-success" href="checkout-address.html">Checkout</a>
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
                <img src="{{ asset(App::environment('production') ? 'public/img/products/'.$item->slug.'.png' : 'img/products/'.$item->slug.'.png') }}" alt="Product">
              </a>
              <h3 class="product-title">
                <a href="{{ route('shop.show', $item->slug) }}">{{ $item->name }}</a>
              </h3>
              <h4 class="product-price">
                <del>Php 44.95</del>Php {{ $item->priceFormat() }}
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
  <script src="{{ asset(App::environment('production') ? 'public/plugins/toastr/toastr.min.js' : 'plugins/toastr/toastr.min.js' )}}"></script>
  <script>
    $('document').ready(function() {
      if ($('.text-medium').text() == 'Php 0.00') {
        $('.text-lg').hide();
        $('#btn-cart-empty').hide();
        $('#btn-cart-coupon').attr('disabled', 'disabled');
        $('.btn-success').attr('disabled', 'disabled');
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
            type: 'PUT',
            // dataType: "json",
            data: data,
            success: function(data){
              if (data.status ==  'OK') {
                toastr.success('Item quantity was successfully updated.', 'Success!');
                toastr.options = {
                  "progressBar": true,
                }
                window.location.href = "{{ route('cart.index') }}";
              } else {
                toastr.error('Updating item quantity failed.', 'Error!');
                toastr.options = {
                  "progressBar": true,
                }
                window.location.href = "{{ route('cart.index') }}";
              }
            }, error:function (xhr, error, ajaxOptions, thrownError){
              console.log(xhr.responseText);
            }
          });
        });
      });
    });
  </script>
@endsection