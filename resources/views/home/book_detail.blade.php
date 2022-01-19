
@extends('layouts.home')

@section('title', $data->title)
@section('description') {{$data->description}}@endsection
@section('keywords', $data->keywords)

@section('content')

    <section class="breadcrumb-section set-bg" data-setbg="{{Storage::url($data->image)}}" style="opacity:0.8; filter:alpha(opacity=80); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: black; opacity: 1.0; filter: alpha(opacity=100);">{{$data->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
          <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{Storage::url($data->image)}}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            @foreach($datalist as $rs)
                            <img data-imgbigurl="{{Storage::url($rs->image)}}"
                                src="{{Storage::url($rs->image)}}" alt="">
                             @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        @php
                        $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                        @endphp
                    <div class="product__details__rating">
                            <span>{{$countreview}} tane yorum yapılmış.</span>
                        </div>
                        <h3>{{$data->title}}</h3>
                        <p>{!!$data->description!!}</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="{{route('user_reservation_add',['book_id'=>$data->id])}}" class="primary-btn">Bu kitabı Ödünç Al</a>
                        <ul>
                            <li><b>Stok</b> <span>{{$data->available}}</span></li>
                            <li><b>Tür</b> <span>{{$data->type}}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Açıklama</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Yorumlar <span>({{$countreview}})</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Ürün Detayı </h6>
                                    <p>{!!$data->detail!!}</p>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="row">
                                    <div class="col-6">
                                        <ul>
                                            <div class="product__details__tab__desc">
                                                @foreach($reviews as $rs)
                                                @if($rs->status == 'True')
                                                <h6>{{$rs->subject}}</h6>
                                                    <small><span>{{$rs->user->name}} tarafından </span>{{$rs->created_at}}'da yazıldı.</small>
                                                    <div class="review-txt">{{$rs->review}}</div>
                                                @endif
                                                @endforeach
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <div class="product__details__tab__desc">
                                            <h6>Reviews</h6>
                                            <p>Yorumun nedir ?</p>
                                            @livewireScripts
                                            <p>@livewire('review',['id'=>$data->id])</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->



@endsection

