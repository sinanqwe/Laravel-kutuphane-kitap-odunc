<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/style.css" type="text/css">
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Rezervasyon</h1>
    @include('home.message')
    <form role="form" action="{{route('admin_reservation_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>ID</th>
                <td>{{ $data->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$data->book->title}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $data->email }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $data->phone }}</td> 
            </tr>
            <tr>
                <th>Book Date</th>
                <td>{{ $data->bookdate }}</td>
            </tr>
            <tr>
                <th>Return Date</th>
                <td>{{ $data->returndate }}</td>
            </tr>
            <tr>
                <th>Days</th>
                <td>{{ $data->days }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $data->status }}</td>
            </tr>
            <th>Admin Note</th>
            <td>
                <textarea id="note" name="note"> {{ $data->note }}</textarea>
            </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                </td>
            </tr>
        </table>
    </form>
</div>