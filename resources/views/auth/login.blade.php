@extends('layouts.master')

@section('title', 'Login')

@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

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
            <button class="btn btn-primary margin-bottom-none" type="submit"><i class="fa fa-sign-in"></i>&nbsp; Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
