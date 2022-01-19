@extends('layouts.home')

@section('title', 'Kitabı Düzenle')

@section('headerjs')
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection
@section('content')

<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                @include('home.usermenu')
            </div>
            <div class="col-lg-10">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Kitabı Düzenle</h4>
                        <div class="col-md-10">
                            <form role="form" action="{{route('user_book_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Kategori</label>
                                    <select name="category_id">
                                        <option value="0" selected="selected">Main Category</option>
                                        @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Statü</label>
                                    <select name="status">
                                        <option selected disabled>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->title}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Keywords</label>
                                    <input type="text" name="keywords" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->keywords}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->description}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tür</label>
                                    <input type="text" name="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->description}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Available</label>
                                    <input type="number" name="available" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->description}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Detaylar</label>
                                    <textarea id="summernote" name="editor1">{{$data->detail}}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'editor1' );
                                    </script>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Resim</label>
                                    <input type="file" name="image" class="form-control" value="{{$data->image}}">
                                    @if($data->image)
                                    <img src="{{Storage::url($data->image)}}" height="100" alt="">
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Güncelle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>



@endsection