@extends('layouts.home')

@section('title', 'Rezervasyon Düzenle')

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
                        <h4>Rezervasyon Düzenle</h4>
                        <div class="col-md-10">
                            <form role="form" action="{{route('user_reservation_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->name}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->email}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->phone}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Book Date</label>
                                    <input type="text" name="bookdate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->bookdate}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Return Date</label>
                                    <input type="text" name="returndate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->returndate}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Days</label>
                                    <input type="number" name="days" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->days}}">
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