@php
$setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="img/language.png" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div>

        <div class="header__top__right__auth">
            @auth
            {{Auth::user()->name}} -

            <a href="{{route('logout')}}" style="margin-left: 10px;">Çıkış Yap</a>

            @endauth
            @guest
            <a href="{{route('login')}}"><i class="fa fa-user" style="margin-left: 10px;"></i> Giriş</a>
            <a href="{{route('register')}}"><i class="fa fa-user-plus" style="margin-left: 10px;"></i>Kayıt</a>
            @endguest
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="{{route('home')}}">Anasayfa</a></li>
            <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
            <li><a href="{{route('references')}}">References</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a href="{{route('faq')}}">Faq</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i>@if ($setting->email !== null){{$setting->email}} @endif</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->


<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i>@if ($setting->email !== null){{$setting->email}} @endif</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            @if ($setting->facebook !== null) <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a> @endif
                            @if ($setting->twitter !== null) <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>@endif
                            @if ($setting->instagram !== null) <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>@endif
                        </div>
                        <div class="header__top__right__language">
                            <img src="{{asset('assets')}}/img/language.png" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Spanis</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth" style="display: inline-flex;">
                            @auth
                            <a href="{{route('myprofile')}}">{{Auth::user()->name}}</a> -
                            <a href="{{route('logout')}}" style="margin-left: 10px;">Çıkış Yap</a>
                            @endauth
                            @guest
                            <a href="{{route('login')}}"><i class="fa fa-user" style="margin-left: 10px;"></i> Giriş</a>
                            <a href="{{route('register')}}"><i class="fa fa-user-plus" style="margin-left: 10px;"></i>Kayıt</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Anasayfa</a></li>
                        <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{route('faq')}}">Faq</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->