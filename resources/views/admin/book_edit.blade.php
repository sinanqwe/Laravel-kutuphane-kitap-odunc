@extends('layouts.admin')

@section('title', 'Kitap Düzenle')
@section('javascript')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kitap Düzenle</h1>

    <form role="form" action="{{route('admin_book_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="category_id">
                @foreach($datalist as $rs)
                    <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected @endif>
                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Statü</label>
            <select name="status">
                <option selected>{{$data->status}}</option>
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
            <textarea id="summernote" name="detail">{{$data->detail}}</textarea>
            <script>
                $('#summernote').summernote({
                    placeholder: 'Hello stand alone ui',
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
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

@endsection