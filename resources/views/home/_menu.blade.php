@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

<style>
    ul .ull{
        border: 0px solid white;
        padding-left: 16px;
    padding-top: 0px;
    padding-bottom: 0;
    }
</style>

<div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Tüm Türler</span>
                        </div>
                        <ul class="ull">
                            @foreach($parentCategories as $rs)
                            
                            <div class="hero__categories{{$rs->id}}">
                            <div class="hero__categories__all{{$rs->id}}"> 
                                <li><a href="#">{{$rs->title}}<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                                    @if(count($rs->children))
                                        @include('home.categorytree', ['children'=>$rs->children])
                                    @endif
                            </div>
                            </div>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{route('getbook')}}" method="post">
                                @csrf
                                @livewire('search')
                                
                                <button type="submit" class="site-btn">Ara</button>
                            </form>
                            @section('footerjs')
                                @livewireScripts
                            @endsection
                        </div>
                    </div>
                    @include('home._slider')
                </div>