@include('header.header')
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> <a href="#" class="nav_logo"> <img src="{{ ('logo_jki.png') }}" alt="Image" style="width: 30px;"> <span class="nav_logo-name">JKI KA JEPARA</span> </a>
            <div class="nav_list">
                <a href="/dashboard" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                <a href="/datajemaat" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Data Jemaat</span> </a>
                <a href="/administrasi" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Administrasi</span> </a>
                <a href="/renungan" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Renungan</span> </a>
                <a href="/pengumuman" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Pengumuman</span> </a>
                <a href="/home" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Data Home</span> </a>
            </div>
        </div>
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="{{ route('logout') }}" class="nav_link" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span>
            </a>
        </form>
    </nav>
</div>