@extends('layouts.master')

@section('title', 'Register')

@section('content')
  <!-- Off-Canvas Wrapper-->
  <div class="offcanvas-wrapper">
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Register Account</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index-2.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li><a href="account-orders.html">Login</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Register</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-2">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="padding-top-3x hidden-md-up"></div>
          <h3 class="margin-bottom-1x">No Account? Register</h3>
          <p>Registration takes less than a minute but gives you full control over your orders.</p>
          <form method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                  <label for="txt-register-first-name" class="form-control-label">First Name</label>
                  <input class="form-control form-control-rounded" type="text" name="first_name" id="txt-register-first-name" value="{{ old('first_name') }}" required autofocus>
                    @if ($errors->has('first_name'))
                      <span class="form-control-feedback">
                        <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                  <label for="txt-register-last-name" class="form-control-label">Last Name</label>
                  <input class="form-control form-control-rounded" type="text" name="last_name" id="txt-register-last-name" value="{{ old('last_name') }}" required>
                    @if ($errors->has('last_name'))
                      <span class="form-control-feedback">
                        <strong>{{ $errors->first('last_name') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                  <label for="txt-register-emaill-address" class="form-control-label">E-mail Address</label>
                  <input class="form-control form-control-rounded" type="email" name="email" id="txt-register-emaill-address"  value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                    <span class="form-control-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                  <label for="txt-register-password" class="form-control-label">Password</label>
                  <input class="form-control form-control-rounded" type="password" name="password" id="txt-register-password" value="{{ old('password') }}" required>
                  @if ($errors->has('password'))
                    <span class="form-control-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="txt-register-confirm-password" class="form-control-label">Confirm Password</label>
                  <input class="form-control form-control-rounded" type="password" name="password_confirmation" id="txt-register-confirm-password" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-center text-sm-right">
                <button class="btn btn-primary margin-bottom-none" type="submit"><i class="fa fa-pencil-square-o"></i>&nbsp;Register</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
