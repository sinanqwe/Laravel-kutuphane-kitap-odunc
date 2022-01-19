@extends('layouts.admin')

@section('title', 'Kitap Ekle')
@section('javascript')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Faq Ekle</h1>

    <form role="form" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Position</label>
            <input type="number" name="position" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Question</label>
            <input type="text" name="question" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Detaylar</label>
            <textarea id="summernote" name="answer"></textarea>
            <script>
                $('#summernote').summernote({
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
        </div>
        <div class="mb-3">
            <label class="form-label">Statü</label>
            <select name="status">
                <option selected disabled>Seç</option>
                <option>True</option>
                <option>False</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
</div>

@endsection