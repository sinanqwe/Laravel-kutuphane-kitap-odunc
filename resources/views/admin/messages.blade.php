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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Admin Note</th>
                            <th>Status</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Admin Note</th>
                            <th>Status</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($datalist as $rs)
                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->name }}</td>
                            <td>{{ $rs->email }}</td>
                            <td>{{ $rs->phone }}</td>
                            <td>{{ $rs->subject }}</td>
                            <td>{{ $rs->message }}</td>
                            <td>{{ $rs->note }}</td>
                            <td>{{ $rs->status }}</td>
                            <td>
                                <a href="{{route('admin_message_edit', ['id'=> $rs->id])}}" onclick="return !window.open(this.href,'', 'top=50 left=100 width=800 height=700')">
                                    <i class="fas fa-edit"></i> Düzenle
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin_message_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash-alt"></i> Sil
                                </a>
            </div>
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