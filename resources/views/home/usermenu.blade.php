
<div class="sidebar">
    <div class="sidebar__item">
        <h4>Kullanıcı Paneli</h4>
        <ul>
            @php
                $userRoles = Auth::user()->roles->pluck('name');
            @endphp
            @if($userRoles->contains('admin'))
            <li><a href="{{route('admin_home')}}">Admin Panel</a></li>
            @endif
            <li><a href="{{route('myprofile')}}">Profilim</a></li>
            <li><a href="{{route('user_reservations')}}">Rezervasyonlarım</a></li>
            <li><a href="{{route('user_books')}}">Kitaplarım</a></li>
            <li><a href="{{route('myreviews')}}">Yorumlarım</a></li>
            <li><a href="{{route('logout')}}">Çıkış</a></li>
        </ul>
    </div>
</div>
