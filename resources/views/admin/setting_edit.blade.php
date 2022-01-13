@extends('layouts.admin')

@section('title', 'Ayarlar')
@section('javascript')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Ayarlar</h1>

    <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="id" id="id" class="form-control" id="exampleInputEmail1" value="{{$data->id}}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">title</label>
            <input type="text" name="title" id="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->title}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Keywords</label>
            <input type="text" name="keywords" id="keywords" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->keywords}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->description}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">company</label>
            <input type="text" name="company" id="company" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->company}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->address}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->phone}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">fax</label>
            <input type="text" name="fax" id="fax" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->fax}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->email}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Smtp Server</label>
            <input type="text" name="smtpserver" id="smtpserver" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->smtpserver}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Smtp Mail</label>
            <input type="text" name="smtpmail" id="smtpmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->smtpmail}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Smtp Password</label>
            <input type="password" name="smtppassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->smtppassword}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Smtp Port</label>
            <input type="number" id="smtpport" name="smtpport" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->smtpport}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Facebook</label>
            <input type="text" id="facebook" name="facebook" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->facebook}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Instagram</label>
            <input type="text" id="instagram" name="instagram" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->instagram}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Twitter</label>
            <input type="text" id="twitter" name="twitter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->twitter}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">About Us</label>
            <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contact</label>
            <textarea id="contact" name="contact">{{$data->contact}}</textarea>
        </div>
        

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">References</label>
            <textarea id="references" name="references">{{$data->references}}</textarea>
        </div>
       
        <button type="submit" class="btn btn-primary">Güncelle</button>
        <script>
                $('#aboutus').summernote({
                    placeholder: 'Hello stand alone ui',
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
                $('#contact').summernote({
                    placeholder: 'Hello stand alone ui',
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
                $('#references').summernote({
                    placeholder: 'Hello stand alone ui',
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
            </script>
    </form>
    
</div>


@endsection