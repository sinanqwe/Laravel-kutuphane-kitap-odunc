@extends('layouts.admin')

@section('title', 'Mesajlar')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800" style="display: inline-block;">Mesajlar</h1>
    <a href="{{route('admin_book_add')}}" class="btn btn-primary btn-icon-split" style="margin: 0 0 10px 10px;">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Mesajlar</span>
    </a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste</h6>
            @include('home.message')
        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                            <td>{{ $rs->email }}</td>
                            <td>{{ $rs->phone }}</td>
                            <td>{{ $rs->bookdate }}</td>
                            <td>{{ $rs->returndate }}</td>
                            <td>{{ $rs->days }}</td>
                            <td>{{ $rs->note }}</td>
                            <td>{{ $rs->status }}</td>
                            <td>
                                <a href="{{route('admin_reservation_edit', ['id'=> $rs->id])}}" onclick="return !window.open(this.href,'', 'top=50 left=100 width=800 height=700')"><i class="fa fa-edit"></i></a>
                                <a href="{{route('admin_reservation_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


</div>

@endsection

@section('footer')
<!-- Page level plugins -->
<script src="{{ asset('assets') }}/admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets') }}/admin/js/demo/datatables-demo.js"></script>
@endsection