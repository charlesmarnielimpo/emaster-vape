<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/img/icons/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('/img/icons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('/css/vendor.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">

    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="{{ asset('/css/styles.min.css') }}">
    
    <!-- Modernizr-->
    <script src="{{ asset('/js/modernizr.min.js') }}"></script>

    @yield('stylesheets')
  </head>