@extends('layouts.master')

@section('title', 'Login')

@section('content')
  <!-- Off-Canvas Wrapper-->
  <div class="offcanvas-wrapper">
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Login</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index-2.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li><a href="account-orders.html">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-2">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form class="login-box" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="row margin-bottom-1x">
              <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block facebook-btn" href="#"><i class="socicon-facebook"></i>&nbsp;Facebook login</a></div>
              <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block twitter-btn" href="#"><i class="socicon-twitter"></i>&nbsp;Twitter login</a></div>
              <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block google-btn" href="#"><i class="socicon-googleplus"></i>&nbsp;Google+ login</a></div>
            </div>
            <h4 class="margin-bottom-1x">Or using form below</h4>
            <div class="form-group input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <input class="form-control" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus">
              <span class="input-group-addon">
                <i class="icon-mail"></i>
              </span>
              @if ($errors->has('email'))
                <span class="form-control-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
              <input class="form-control" type="password" name="password" placeholder="Password" required>
              <span class="input-group-addon">
                <i class="icon-lock"></i>
              </span>
              @if ($errors->has('password'))
                <span class="form-control-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
            <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
              <label class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" {{ old('remember') ? 'checked' : ''}}><span class="custom-control-indicator"></span><span class="custom-control-description">Remember me</span>
              </label><a class="navi-link" href="{{ url('/password/reset') }}">Forgot password?</a>
            </div>
            <div class="text-center text-sm-right">
              <button class="btn btn-primary margin-bottom-none" type="submit"><i class="fa fa-sign-in"></i>&nbsp;Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
