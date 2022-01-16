
@extends('layouts.home')

@section('title', $setting->title)

@section('description'){{$setting->description}}@endsection

@section('keywords', $setting->keywords)

@section('content')

<section class="hero">
    <div class="container">
        <div class="row">
            @include('home._menu')
        </div>
    </div>
</section>

<section class="categories">
    <div class="container">
        <div class="row">
          @include('home._category')
        </div>
    </div>
</section>

@endsection

