@extends('layouts.admin')

@section('title', 'Kategori Düzenle')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kategori Düzenle</h1>

    <form role="form" action="{{route('admin_category_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Parent id</label>
            <input type="text" name="parent_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->type}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Statü</label>
            <select name="status">
                <option selected="selected" disabled>{{$data->status}}</option>
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