
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
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{route('book',['id' => $rs->id])}}">{{$rs->title}}</a></h6>
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
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{route('book',['id' => $rs->id])}}">{{$rs->title}}</a></h6>
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
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{route('book',['id' => $rs->id])}}">{{$rs->title}}</a></h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Featured Section End -->