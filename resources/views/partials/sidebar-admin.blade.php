<nav>
    <div class="sidebar">
        <div class="row">
            <div class="col">
                <div class="header">
                    <h2>Profile</h2>
                </div>
                <div class="menu-items">
                    <ul class="nav-links">
                        <li class="nav-link {{ $currentPage === 'dashboard-admin' ? 'nav-active' : '' }}">
                            <a class=" {{ $currentPage === 'dashboard-admin' ? 'active' : '' }} " href="/dashboard-admin">
                                <img src="{{ $currentPage === 'dashboard-admin' ? 'img/dashboard-av.svg' : 'img/dashboard.svg' }}" alt="">
                                <svg class=" {{ $currentPage === 'dashboard-admin' ? 'line' : 'none' }} " xmlns="http://www.w3.org/2000/svg" width="10" height="36" viewBox="0 0 8 44" fill="none">
                                    <path d="M4 40L4 4" stroke="#F9FBFB" stroke-width="8" stroke-linecap="round"/>
                                  </svg>
                                <span class="link-name">Absen</span>
                            </a>
                        </li>
                        <li class="nav-link {{ $currentPage === 'tugas' ? 'nav-active' : '' }}">
                            <a class=" {{ $currentPage === 'tugas' ? 'active' : '' }} " href="/tugas">
                                <img src="{{ $currentPage === 'tugas' ? 'img/penugasan-av.svg' : 'img/penugasan.svg' }}" alt="">
                                <svg class=" {{ $currentPage === 'tugas' ? 'line' : 'none' }} " xmlns="http://www.w3.org/2000/svg" width="10" height="36" viewBox="0 0 8 44" fill="none">
                                    <path d="M4 40L4 4" stroke="#F9FBFB" stroke-width="8" stroke-linecap="round"/>
                                  </svg>
                                <span class="link-name">Tugas</span>
                            </a>
                        </li>
                        <li class="nav-link {{ $currentPage === 'pemberitahuan' ? 'nav-active' : '' }}">
                            <a class=" {{ $currentPage === 'pemberitahuan' ? 'active' : '' }} " href="/pemberitahuan">
                                <img src="{{ $currentPage === 'pemberitahuan' ? 'img/panduan-av.svg' : 'img/panduan.svg' }}" alt="">
                                <svg class=" {{ $currentPage === 'pemberitahuan' ? 'line' : 'none' }} " xmlns="http://www.w3.org/2000/svg" width="10" height="36" viewBox="0 0 8 44" fill="none">
                                    <path d="M4 40L4 4" stroke="#F9FBFB" stroke-width="8" stroke-linecap="round"/>
                                  </svg>
                                <span class="link-name">Kuis UKM</span>
                            </a>
                        </li>
                        <li class="nav-logout">
                            <a href="/">
                              <img src="img/logout.svg" alt="">
                              <span class="link-name">Logout</span>
                            </a>
                          </li>
                    </ul>
                </div> 
            </div>
            
    </div>

        </div>
        </nav>
