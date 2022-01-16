@extends('layouts.home')

@section('title', 'References - ' .$setting->title)
@section('description') {{$setting->description}}@endsection
@section('keywords', $setting->keywords)


@section('content')

<h1 style="text-align: center; margin-top:50px;">Referanslarımız</h1>
<div class="container" style="margin-top: 50px;">
  <div class="row">
    {!!$setting->references!!}
  </div>
</div>


@endsection