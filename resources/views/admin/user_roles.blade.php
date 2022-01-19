<html>
    <head>
        <title>Rol Düzenle</title>
        <link href="{{ asset('assets') }}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800" style="margin-top: 50px;">Kitap :</h1>

        <table class="table mt-3">
                                <tr>
                                    <th scope="col">ID</th><td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Name</th><td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Email</th><td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        <table>
                                            @foreach($data->roles as $row)
                                                <tr>
                                                    <td>{{$row->name}} <a href="{{ route('admin_user_role_delete', ['userid' => $data->id,'roleid' => $row->id]) }}" onclick="return confirm('Delete. Are you sure?')">Delete</a></td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Add Role</th>
                                    <td>
                                        <form role="form" action="{{ route('admin_user_role_add',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <select class="form-control" id="formGroupDefaultSelect" name="roleid">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <button type="submit" class="btn btn-success">Add Role</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
            </div>
    </body>
</html>
