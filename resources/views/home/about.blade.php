@extends('layouts.home')

@section('title', 'About Us - ' .$setting->title)
@section('description') {{$setting->description}}@endsection
@section('keywords', $setting->keywords)

@section('content')

<h1 style="text-align: center; margin-top:50px;">Hakkımızda</h1>
<div class="container" style="margin-top: 50px;">
  <div class="row">
    {!!$setting->aboutus!!}
  </div>
</div>


@endsection