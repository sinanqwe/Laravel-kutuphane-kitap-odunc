@extends('layouts.admin')

@section('title', 'Kategori Düzenle')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kategori Düzenle</h1>

    <form role="form" action="{{route('admin_category_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Main Category</label>
            <select name="parent_id">
                @foreach($datalist as $rs)
                <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif>
                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Türü</label>
            <input type="text" name="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->type}}">
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
            <label for="exampleInputEmail1" class="form-label">Resim</label>
            <input type="file" name="image" class="form-control" value="{{Storage::url($data->image)}}">
            @if($data->image)
                <img src="{{Storage::url($data->image)}}" height="100" alt="">
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Statü</label>
            <select name="status">
                <option selected="selected">{{$data->status}}</option>
                <option>True</option>
                <option>False</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
</div>

@endsection