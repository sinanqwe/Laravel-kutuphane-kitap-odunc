@foreach($children as $subcategory)
    <ul>
        @if(count($subcategory->children))
            <li>{{$subcategory->title}}</li>
                <ul>
                    @include('home.categorytree',['children'=>$subcategory->children])
                </ul>
            <hr>
        @else
        <li><a href="{{route('categorybooks',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a> </li>
        @endif
    </ul>
@endforeach
