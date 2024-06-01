@php
    $settings = getSettings();
    $social_media_link = getSocialMediaLink();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $settings->app_name }} - @yield('pageTitle', $settings->app_name)</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ public_asset('assets/front/images/fav.jpg') }}">
    <link rel="stylesheet" href="{{ public_asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ public_asset('assets/front/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ public_asset('assets/front/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ public_asset('assets/front/css/style.css') }}" />
    @stack('styles')
</head>

<body>

    <!-- ################# Header Starts Here#######################--->

    @include('layouts.header')

    @yield('content')


    <!--  ************************* Footer Start Here ************************** -->

    @include('layouts.footer')


</body>

@include('layouts.scripts')


</html>
