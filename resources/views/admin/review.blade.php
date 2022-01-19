@extends('layouts.admin')

@section('title', 'Yorumlar')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800" style="display: inline-block;">Yorumlar</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste</h6>
            @include('home.message')
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
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
                            <th>Name</th>
                            <th>Kitap</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($datalist as $rs)
                        <tr>
                        
                            <td>{{ $rs->id }}</td>
                            
                            <td>
                                <a href="{{route('admin_user_show', ['id'=> $rs->user->id])}}" onclick="return !window.open(this.href,'', 'top=50 left=100 width=800 height=700')">
                                    {{ $rs->user->name }}
                                </td>
                            <td>
                                <a href="{{route('book', ['id'=>$rs->book->id])}}">
                                    {{ $rs->book->title }}</a>
                            </td>
                            <td>{{ $rs->subject }}</td>
                            <td>{{ $rs->review }}</td>
                            <td>{{ $rs->rate }}</td>
                            <td>{{ $rs->status }}</td>
                            <td>{{ $rs->created_at }}</td>
                            <td>
                            <a href="{{route('admin_review_show', ['id'=> $rs->id])}}" onclick="return !window.open(this.href,'', 'top=50 left=100 width=800 height=700')">
                            <i class="fa fa-edit"></i></a>
                                <a href="{{route('admin_review_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')">
                                <i class="fa fa-trash"></i>
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