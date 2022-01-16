@extends('layouts.admin')

@section('title', 'Kategori Ekle')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kategori Ekle</h1>

    <form role="form" action="{{route('admin_category_create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Main Category</label>
            <select name="parent_id">
                <option value="0" selected="selected">Main Category</option>
                @foreach($datalist as $rs)
                    <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tür</label>
            <input type="text" name="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Keywords</label>
            <input type="text" name="keywords" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Resim</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Statü</label>
            <select name="status">
                <option selected disabled>Seç</option>
                <option>True</option>
                <option>False</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
</div>

@endsection