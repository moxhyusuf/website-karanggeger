<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="/assets/img/logo.png"
             class="brand-image img-circle elevation-3"
             style="opacity:.8"
             alt="Logo">
        <span class="brand-text font-weight-light">Desa Karanggeger</span>
    </a>

    <div class="sidebar">

        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
           
            <div class="info text-center">
    <a href="#" class="d-block">
        {{ Auth::user()->jabatan }}
    </a>
</div>


        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" 
                data-widget="treeview" 
                role="menu" 
                data-accordion="false">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                       class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Hero -->
                <li class="nav-item">
                    <a href="{{ route('admin.hero.index') }}"
                       class="nav-link {{ request()->routeIs('admin.hero.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-images"></i>
                        <p>Hero</p>
                    </a>
                </li>

                <!-- Petugas -->
                <li class="nav-item">
                    <a href="{{ route('admin.petugas.index') }}"
                       class="nav-link {{ request()->routeIs('admin.petugas.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>Petugas</p>
                    </a>
                </li>

                <!-- Tentang Desa -->
                @php
                    $tentangDesa = request()->routeIs(
                        'admin.sejarah.*',
                        'admin.kependudukan.*',
                        'admin.struktur.*',
                        
                        'admin.kepala_desa.*',
                        'admin.vismis.*'
                    );
                @endphp

                <li class="nav-item {{ $tentangDesa ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ $tentangDesa ? 'active' : '' }}">
                        <i class="nav-icon fas fa-landmark"></i>
                        <p>
                            Tentang Desa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.sejarah.index') }}"
                               class="nav-link {{ request()->routeIs('admin.sejarah.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sejarah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.kependudukan.index') }}"
                               class="nav-link {{ request()->routeIs('admin.kependudukan.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kependudukan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.struktur.index') }}"
                               class="nav-link {{ request()->routeIs('admin.struktur.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Struktur</p>
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            <a href="{{ route('admin.kepala_desa.index') }}"
                               class="nav-link {{ request()->routeIs('admin.kepala_desa.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profil Kepala Desa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.vismis.index') }}"
                               class="nav-link {{ request()->routeIs('admin.vismis.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visi & Misi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Promo Desa -->
                @php
                    $promoDesa = request()->routeIs(
                        'admin.program.*',
                        'admin.produk.*',
                        'admin.umkm.*',
                        'admin.bumdes.*'
                    );
                @endphp

                <li class="nav-item {{ $promoDesa ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ $promoDesa ? 'active' : '' }}">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            Promo Desa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.program.index') }}"
                               class="nav-link {{ request()->routeIs('admin.program.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Program Unggulan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.produk.index') }}"
                               class="nav-link {{ request()->routeIs('admin.produk.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produk Unggulan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.umkm.index') }}"
                               class="nav-link {{ request()->routeIs('admin.umkm.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produk UMKM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.bumdes.index') }}"
                               class="nav-link {{ request()->routeIs('admin.bumdes.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>BUMDesa & KDMP</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Update Desa -->
                @php
                    $updateDesa = request()->routeIs(
                        'admin.berita.*',
                        'admin.galeri.*',
                       
                        'admin.prestasi.*'
                    );
                @endphp

                <li class="nav-item {{ $updateDesa ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ $updateDesa ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Update Desa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.berita.index') }}"
                               class="nav-link {{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Berita Desa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.galeri.index') }}"
                               class="nav-link {{ request()->routeIs('admin.galeri.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Galeri Desa</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ route('admin.prestasi.index') }}"
                               class="nav-link {{ request()->routeIs('admin.prestasi.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Prestasi Desa</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Ruang Pemuda -->
               

                <!-- Ruang Curhat -->
                <li class="nav-item">
                    <a href="{{ route('admin.ruang_curhat.index') }}"
                       class="nav-link {{ request()->routeIs('admin.ruang_curhat.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>Ruang Curhat</p>
                    </a>
                </li>

                <!-- Divider -->
                <li class="nav-header">SISTEM</li>

                <!-- Logout -->
                <li class="nav-item">
                    <a href="/login" class="nav-link text-danger">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>