<div class="categories__slider owl-carousel">
    <div class="col-lg-3">
        <div class="categories__item set-bg" data-setbg="{{asset('assets')}}/img/categories/cat-1.jpg">
            <h5><a href="#">Romanlar</a></h5>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="categories__item set-bg" data-setbg="{{asset('assets')}}/img/categories/cat-2.jpg">
            <h5><a href="#">Çocuk Kitapları</a></h5>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="categories__item set-bg" data-setbg="{{asset('assets')}}/img/categories/cat-3.jpg">
            <h5><a href="#">Ders Kitapları</a></h5>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="categories__item set-bg" data-setbg="{{asset('assets')}}/img/categories/cat-4.jpg">
            <h5><a href="#">Dergiler</a></h5>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="categories__item set-bg" data-setbg="{{asset('assets')}}/img/categories/cat-5.jpg">
            <h5><a href="#">Akademik Kitaplar</a></h5>
        </div>
    </div>
</div>

<!-- Featured Section Begin -->
<section class="featured spad" style="width:100%">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Bugünün En İyileri</h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach($daily as $rs)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{Storage::url($rs->image)}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="{{route('addtocart',['id'=>$rs->id])}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{route('books',['id' => $rs->id])}}">{{$rs->title}}</a></h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Featured Section End -->



<!-- Featured Section Begin -->
<section class="featured spad" style="width:100%">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>En Son Eklenenler</h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach($last as $rs)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{Storage::url($rs->image)}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="{{route('addtocart',['id'=>$rs->id])}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{route('books',['id' => $rs->id])}}">{{$rs->title}}</a></h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Featured Section Begin -->
<section class="featured spad" style="width:100%">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Tüm Zamanların En İyileri</h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach($best as $rs)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{Storage::url($rs->image)}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="{{route('addtocart',['id'=>$rs->id])}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{route('books',['id' => $rs->id])}}">{{$rs->title}}</a></h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Featured Section End -->