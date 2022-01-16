<html>
    <head>
        <title>Galeri</title>
        <link href="{{ asset('assets') }}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800" style="margin-top: 50px;">Kitap :</h1>

        <form role="form" action="{{route('admin_image_store', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Resim</label>
                <input type="file" name="image" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Ekle</button>
        </form>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Resim</th>
                                <th>Sil</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Resim</th>
                                <th>Sil</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($images as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin_image_delete', ['id'=> $rs->id, 'book_id' =>$data->id])}}" onclick="return confirm('Silmek istediğine emin misin ?')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
    </body>
</html>
