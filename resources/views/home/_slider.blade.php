<div class="categories__slider owl-carousel">
    @foreach($slider as $rs)
    <div class="col-lg-3">
        
            <div class="categories__item set-bg" data-setbg="{{Storage::url($rs->image)}}" style="height: 370px;">
                <h5><a href="{{route('books', ['id'=>$rs->id])}}">{{$rs->title}}</a></h5>
            </div>
    </div>
    @endforeach
</div>