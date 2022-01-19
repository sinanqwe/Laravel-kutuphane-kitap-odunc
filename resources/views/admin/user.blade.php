@extends('layouts.admin')

@section('title', 'Kullanıcılar')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800" style="display: inline-block;">Kitaplar</h1>
    <a href="{{route('admin_book_add')}}" class="btn btn-primary btn-icon-split" style="margin: 0 0 10px 10px;">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Kullanıcılar</span>
    </a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Adress</th>
                            <th>Roles</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>User Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Adress</th>
                            <th>Roles</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($datalist as $rs )
                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>@if($rs->profile_photo_path)
                                <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px">
                            </td>
                            @endif
                            <td>{{ $rs->name }}</td>
                            <td>{{ $rs->email }}</td>
                            <td>{{ $rs->phone }}</td>
                            <td>{{ $rs->adress }}</td>
                            <td> @foreach( $rs->roles as $row)
                                {{ $row->name }},
                                @endforeach
                                <a href="{{route('admin_user_roles', ['id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                    <strong> +</strong>
                                </a>
                            </td>

                            <td>
                                <div class="position-relative">
                                    <a href="{{route('admin_user_edit', ['id'=> $rs->id])}}">
                                        Edit
                                    </a>
                                    <a href="{{route('admin_user_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure?')">
                                        Delete
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