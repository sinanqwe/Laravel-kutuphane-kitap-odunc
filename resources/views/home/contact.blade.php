@extends('layouts.home')

@section('title', 'İletişim - ' .$setting->title)
@section('description') {{$setting->description}}@endsection
@section('keywords', $setting->keywords)


@section('content')

<h1 style="text-align: center; margin-top:50px;">İletişim</h1>
<div class="container" style="margin-top: 50px;">
  <div class="row">
    <div class="col-md-6">
      {!!$setting->contact!!}
    </div>
    <div class="col-md-6">
      @include('home.message')
      <form action="{{route('sendmessage')}}" id="form-validate" method="post">
        @csrf
        <div class="static-contain">
          <div class="mb-3">
            <input class="form-control" type="text" name="name" placeholder="Ad Soyad">
          </div><br>
          <div class="mb-3">
            <input class="form-control" type="email" name="email" placeholder="Email">
          </div><br>
          <div class="mb-3">
            <input class="form-control" type="text" name="phone" placeholder="Telefon">
          </div><br>
          <div class="mb-3">
            <textarea class="form-control" type="text" name="subject" cols="60" rows="1" placeholder="Konu"></textarea>
          </div><br>
          <div class="mb-3">
            <textarea class="form-control" type="text" name="message" cols="60" rows="3" placeholder="Mesajınız"></textarea>
          </div>
        </div>
        <div class="buttons-set">
          <button type="submit" title="Submit" class="btn btn-primary"> <span> Submit </span> </button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection