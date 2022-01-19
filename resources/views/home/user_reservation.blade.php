@extends('layouts.home')

@section('title', 'Rezervasyonlarım')


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
                                <h4>Rezervasyonlarım</h4>
                                @include('home.message')
                                <div class="col-md-10">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Book id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Book Date</th>
                                                <th>Return Date</th>
                                                <th>Days</th>
                                                <th>Note</th>
                                                <th>Status</th>
                                                <th colspan="2">Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Book id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Book Date</th>
                                                <th>Return Date</th>
                                                <th>Days</th>
                                                <th>Note</th>
                                                <th>Status</th>
                                                <th colspan="2">Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($datalist as $rs )
                                            <tr>
                                                <td>{{ $rs->id }}</td>
                                                <td><a href="{{route('book',['id'=>$rs->book->id])}}" target="_blank">{{$rs->book->title}}</a></td>
                                                <td>{{ $rs->name }}</td>
                                                <td>{{ $rs->email }}</td>
                                                <td>{{ $rs->phone }}</td>
                                                <td>{{ $rs->bookdate }}</td>
                                                <td>{{ $rs->returndate }}</td>
                                                <td>{{ $rs->days }}</td>
                                                <td>{{ $rs->note }}</td>
                                                <td>{{ $rs->status }}</td>
                                                <td>
                                                    <a href="{{route('user_reservation_edit', ['id'=> $rs->id])}}"><i class="fa fa-edit"></i></a>
                                                    <a href="{{route('user_reservation_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
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