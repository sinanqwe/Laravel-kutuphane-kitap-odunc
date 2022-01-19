@extends('layouts.home')

@section('title', 'Kullanıcı Profili')


@section('content')


<div class="container">
    <div class="row">

        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        @include('home.usermenu')
                    </div>
                    <div class="col-lg-10">
                        <div class="sidebar">
                            <div class="sidebar__item">
                                <h4>Profilim</h4>
                                @include('profile.show')
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>


@endsection