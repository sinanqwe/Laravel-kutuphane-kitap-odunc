@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

<div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Tüm Türler</span>
                        </div>
                        <ul>
                            @foreach($parentCategories as $rs)
                            <li><a href="#">{{$rs->title}}</a></li>
                                @if(count($rs->children))
                                    @include('home.categorytree', ['children'=>$rs->children])
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="Ne aramıştın?">
                                <button type="submit" class="site-btn">Ara</button>
                            </form>
                        </div>
                    </div>
                    @include('home._slider')
                </div>