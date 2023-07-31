<nav>
        <div class="row sidebar sidebar-main ">
            <div class="col sidebar-col ">
                <div class="sidebar-header">
                    <h2>Profile</h2>
                </div>
                <div class="menu-items">
                    <ul class="nav-links">
                        <li class="nav-link {{ $currentPage === 'dashboard' ? 'nav-active' : '' }}">
                            <a class=" {{ $currentPage === 'dashboard' ? 'active' : '' }} " href="/dashboard">
                                <img src="{{ $currentPage === 'dashboard' ? 'img/dashboard-av.svg' : 'img/dashboard.svg' }}" alt="">
                                
                                <svg class=" {{ $currentPage === 'dashboard' ? 'line' : 'none' }} " xmlns="http://www.w3.org/2000/svg" width="10" height="36" viewBox="0 0 8 44" fill="none">
                                    <path d="M4 40L4 4" stroke="#F9FBFB" stroke-width="8" stroke-linecap="round"/>
                                </svg>
                                <span class="link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-link {{ $currentPage === 'penugasan' ? 'nav-active' : '' }}">
                            <a class=" {{ $currentPage === 'penugasan' ? 'active' : '' }} " href="/penugasan">
                                <img src="{{ $currentPage === 'penugasan' ? 'img/penugasan-av.svg' : 'img/penugasan.svg' }}" alt="">
                                <svg class=" {{ $currentPage === 'penugasan' ? 'line' : 'none' }} " xmlns="http://www.w3.org/2000/svg" width="10" height="36" viewBox="0 0 8 44" fill="none">
                                    <path d="M4 40L4 4" stroke="#F9FBFB" stroke-width="8" stroke-linecap="round"/>
                                </svg>
                                <span class="link-name">Penugasan</span>
                            </a>
                        </li>
                        <li class="nav-link {{ $currentPage === 'buku-panduan' ? 'nav-active' : '' }}">
                            <a class=" {{ $currentPage === 'buku-panduan' ? 'active' : '' }} " href="/buku-panduan">
                                <img src="{{ $currentPage === 'buku-panduan' ? 'img/panduan-av.svg' : 'img/panduan.svg' }}" alt="">
                                <svg class=" {{ $currentPage === 'buku-panduan' ? 'line' : 'none' }} " xmlns="http://www.w3.org/2000/svg" width="10" height="36" viewBox="0 0 8 44" fill="none">
                                    <path d="M4 40L4 4" stroke="#F9FBFB" stroke-width="8" stroke-linecap="round"/>
                                </svg>
                                <span class="link-name">Buku Panduan</span>
                            </a>
                        </li>
                        <li class="nav-link {{ $currentPage === 'pengenalan-ukm' ? 'nav-active' : '' }}">
                            <a class=" {{ $currentPage === 'pengenalan-ukm' ? 'active' : '' }} " href="/pengenalan-ukm">
                                <img src="{{ $currentPage === 'pengenalan-ukm' ? 'img/ukm-av.svg' : 'img/ukm.svg' }}" alt="">
                                <svg class=" {{ $currentPage === 'pengenalan-ukm' ? 'line' : 'none' }} " xmlns="http://www.w3.org/2000/svg" width="10" height="36" viewBox="0 0 8 44" fill="none">
                                    <path d="M4 40L4 4" stroke="#F9FBFB" stroke-width="8" stroke-linecap="round"/>
                                </svg>
                                <span class="link-name">Pengenalan UKM</span>
                            </a>
                        </li>
                        <li class="nav-link {{ $currentPage === 'sertifikat' ? 'nav-active' : '' }}">
                            <a class=" {{ $currentPage === 'sertifikat' ? 'active' : '' }} " href="/sertifikat">
                                <img src="{{ $currentPage === 'sertifikat' ? 'img/sertifikat-av.svg' : 'img/sertifikat.svg' }}" alt="">
                                <svg class=" {{ $currentPage === 'sertifikat' ? 'line' : 'none' }} " xmlns="http://www.w3.org/2000/svg" width="10" height="36" viewBox="0 0 8 44" fill="none">
                                    <path d="M4 40L4 4" stroke="#F9FBFB" stroke-width="8" stroke-linecap="round"/>
                                </svg>
                                <span class="link-name">Sertifikat</span>
                            </a>
                        </li>
                        <li class="nav-link {{ $currentPage === 'edit-profile' ? 'nav-active' : '' }}">
                            <a class=" {{ $currentPage === 'edit-profile' ? 'active' : '' }} " href="/profile">
                                <img src="{{ $currentPage === 'edit-profile' ? 'img/profile-av.svg' : 'img/profile.svg' }}" alt="">
                                <svg class=" {{ $currentPage === 'edit-profile' ? 'line' : 'none' }} " xmlns="http://www.w3.org/2000/svg" width="10" height="36" viewBox="0 0 8 44" fill="none">
                                    <path d="M4 40L4 4" stroke="#F9FBFB" stroke-width="8" stroke-linecap="round"/>
                                </svg>
                                <span class="link-name">Profile</span>
                            </a>
                        </li>
                        <li class="nav-logout">
                            <button id="logout-button">
                                <a href="/"  >
                                    <img src="img/logout.svg" alt="">
                                    <span class="link-name">Logout</span>
                                </a>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

