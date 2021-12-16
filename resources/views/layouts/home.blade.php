<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Sinan Muharrem Yılmaz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css" type="text/css">
    @yield('css')
    @yield('headerjs')
</head>

<body>
@include('home._header')

<section class="hero">
    <div class="container">
        <div class="row">
            @include('home._menu')
            
        </div>
    </div>
</section>

<section class="categories">
    <div class="container">
        <div class="row">
          @include('home._category')
        </div>
    </div>
</section>

@section('content')
içerik alanı
@show
@include('home._footer')
@yield('footerjs')
</body>
</html>