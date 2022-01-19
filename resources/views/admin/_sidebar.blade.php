
            
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin_home')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Kütüphane</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('admin_home')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Anasayfa</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Arayüz
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin_category')}}">
                <i class="fas fa-list-alt"></i>
                <span>Kategoriler</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin_book')}}">
                <i class="fas fa-list-alt"></i>
                <span>Kitaplar</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin_setting')}}">
            <i class="fas fa-fw fa-wrench"></i>
                <span>Ayarlar</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin_message')}}">
            <i class="fas fa-envelope-open-text"></i>
                <span>Mesajlar</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin_review')}}">
            <i class="fa fa-comment"></i>
                <span>Yorumlar</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin_faq')}}">
            <i class="fa fa-question-circle"></i>
                <span>Faq</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin_reservation')}}">
            <i class="fa fa-book"></i>
                <span>Rezervasyonlar</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin_users')}}">
            <i class="fa fa-users"></i>
                <span>Üyeler</span>
            </a>
        </li>

        </ul>
        <!-- End of Sidebar -->
