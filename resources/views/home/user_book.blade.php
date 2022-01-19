@extends('layouts.home')

@section('title', 'Eklediğim Kitaplarım')


@section('content')


<div class="container">
    <div class="row">

        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        @include('home.usermenu')
                    </div>
                    <div class="col-lg-10">

                        <div class="sidebar">
                            <div class="sidebar__item">
                                <h4>Eklediğim Kitaplarım</h4>
                                <a href="{{route('user_book_add')}}" class="btn btn-primary btn-icon-split" style="margin: 0 0 10px 10px;">
                                @include('home.message')
                                    <span>
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    <span class="text">Kitap Ekle</span>
                                </a>
                                <div class="col-md-10">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Type</th>
                                                <th>Available</th>
                                                <th>Status </th>
                                                <th>Image</th>
                                                <th>Gallery</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Type</th>
                                                <th>Available</th>
                                                <th>Status </th>
                                                <th>Image</th>
                                                <th>Gallery</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($datalist as $rs )
                                            <tr>
                                                <td>{{ $rs->id }}</td>
                                                <td>{{ $rs->title }}</td>
                                                <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                                <td>{{ $rs->type }}</td>
                                                <td>{{ $rs->available }}</td>
                                                <td>{{ $rs->status }}</td>
                                                <td>
                                                    @if ($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('user_image_add', ['book_id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')"><i class="fa fa-image"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{route('user_book_edit', ['id'=> $rs->id])}}"><i class="fa fa-edit"></i></a>
                                                    <a href="{{route('user_book_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
</div>


@endsection