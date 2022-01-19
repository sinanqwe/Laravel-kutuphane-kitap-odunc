<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/style.css" type="text/css">
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Mesaj</h1>
    @include('home.message')
    <form role="form" action="{{route('admin_review_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <th>ID</th>
            <td>{{ $data->id }}</td>
            <tr>
            </tr>
            <th>Name</th>
            <td>
                {{ $data->user->name }}
            </td>
            <tr>
            </tr>

            <th>Book</th>
            <td>{!! $data->book->title !!}</td>
            <tr>
            </tr>
            <th>Subject</th>
            <td>{{ $data->subject }}</td>
            <tr>
            </tr>
            <th>Review</th>
            <td>{!! $data->review !!}</td>
            <tr>
            </tr>
                <th>IP</th><td>{{ $data->IP }}</td>
            <tr>
            </tr>
                <th>Created date</th><td>{{ $data->created_at }}</td>
            <tr>
            </tr>
                <th>Updated date</th><td>{{ $data->updated_at }}</td>
            <tr>
            <th>Status</th>
            <td>
                <select name="status">
                    <option selected>{{ $data->status}}</option>
                    <option>True</option>
                    <option>False</option>
                </select>
            </td>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                </td>
            </tr>
        </table>
    </form>
</div>