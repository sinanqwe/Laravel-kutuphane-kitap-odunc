@extends('layouts.home')

@section('title', 'Kullanıcı Profili')


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
                                <h4>Yorumlarım</h4>
                                <div class="col-md-10">
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Kitap</th>
                                                <th>Subject</th>
                                                <th>Review</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th colspan="3">Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Kitap</th>
                                                <th>Subject</th>
                                                <th>Review</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th colspan="3">Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @include('home.message')
                                            @foreach($datalist as $rs )
                                            <tr>
                                                <td>{{ $rs->id }}</td>
                                                <td><a href="{{route('book',['id'=>$rs->book->id])}}" target="_blank">{{$rs->book->title}}</a></td>
                                                <td>{{ $rs->subject }}</td>
                                                <td>{{ $rs->review }}</td>
                                                <td>{{ $rs->status }}</td>
                                                <td>{{ $rs->created_at }}</td>
                                                <td>
                                                    <a href="{{route('admin_review_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')">
                                                        Delete
                                                    </a>
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
</div>
</div>


@endsection