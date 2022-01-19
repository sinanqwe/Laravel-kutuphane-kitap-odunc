
<style>
    ul .ull{
        border: 0px solid white;
    }
</style>

@foreach($children as $subcategory)
    <ul class="ull">
        @if(count($subcategory->children))
            <li><i class="fa fa-caret-right"></i>{{$subcategory->title}}</li>
                <ul class="ull">
                   @include('home.categorytree',['children'=>$subcategory->children])
                </ul>
        @else
        <li><a href="{{route('categorybooks',['id'=>$subcategory->id])}}"><i class="fa fa-caret-right"></i>{{$subcategory->title}}</a> </li>
        @endif
    </ul>
@endforeach
