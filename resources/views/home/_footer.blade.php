@php
$setting = \App\Http\Controllers\HomeController::getsetting();
@endphp
<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="{{route('home')}}"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>@if ($setting->address !== null)Adres : {{$setting->address}} @endif</li>
                        <li>@if ($setting->phone !== null)Telefon : {{$setting->phone}} @endif</li>
                        <li>@if ($setting->email !== null)Email : {{$setting->email}} @endif</li>
                        <li>@if ($setting->fax !== null)Fax : {{$setting->fax}} @endif</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h3>Biz</h3>
                    <hr>
                    <ul>
                        <li><a href="{{route('home')}}">Anasayfa</a></li>
                        <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{route('faq')}}">Faq</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6 style="margin-bottom: 7px;">Sosyal Medyada Biz</h6>
                    <p style="margin-bottom: -15px;">Bizi takip edin!</p>
                    <hr>
                    <div class="footer__widget__social">
                        @if ($setting->facebook !== null) <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a> @endif
                        @if ($setting->twitter !== null) <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>@endif
                        @if ($setting->instagram !== null) <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>@endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | {{$setting->company}}
                        </p>
                    </div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->


<!-- Js Plugins -->
<script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.nice-select.min.js"></script>
<script src="{{asset('assets')}}/js/jquery-ui.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.js"></script>
<script src="{{asset('assets')}}/js/mixitup.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>