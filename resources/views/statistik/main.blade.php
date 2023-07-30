@extends('Layout/main')
@section('isi')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
            @if (Session('role') == 1)
                <li class="nav-item">
                    <a class="nav-link " href="/dashboard">
                        <i class="bi bi-grid"></i>
                        <span>Beranda</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/statistik">
                        <i class="bi bi-bar-chart"></i><span>Statistik Kependudukan</span>
                    </a>
                </li><!-- End Charts Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-menu-button-wide"></i><span>Dokumen</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="/arsip">
                                <i class="bi bi-circle"></i><span>Arsip Dokumen</span>
                            </a>
                        </li>
                        <li>
                            <a href="/unggah">
                                <i class="bi bi-circle"></i><span>Unggah Dokumen</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Components Nav -->
            @elseif (Session('role') == 2)
                <li class="nav-item">
                    <a class="nav-link " href="/dashboard">
                        <i class="bi bi-grid"></i>
                        <span>Beranda</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/absensi">
                        <i class="bi bi-card-list"></i>
                        <span>Daftar Absensi</span>
                    </a>
                </li><!-- End Register Page Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/statisik">
                        <i class="bi bi-bar-chart"></i><span>Statistik Kependudukan</span>
                    </a>
                </li><!-- End Charts Nav -->
            @elseif (Session('role') == 0)
                <li class="nav-item">
                    <a class="nav-link " href="/dashboard">
                        <i class="bi bi-grid"></i>
                        <span>Beranda</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/absensi">
                        <i class="bi bi-card-list"></i>
                        <span>Daftar Absensi</span>
                    </a>
                </li><!-- End Register Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/statistik">
                        <i class="bi bi-bar-chart"></i><span>Statistik Kependudukan</span>
                    </a>
                </li><!-- End Charts Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-menu-button-wide"></i><span>Dokumen</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="/arsip">
                                <i class="bi bi-circle"></i><span>Arsip Dokumen</span>
                            </a>
                        </li>
                        <li>
                            <a href="/unggah">
                                <i class="bi bi-circle"></i><span>Unggah Dokumen</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Components Nav -->
            @endif
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Beranda</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item active">Dasbor</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="User Greetings">
                    <p>Selamat datang, <span id="nama user"><strong>{{ Session('nama') }}</strong></span>
                        Anda masuk sebagai <span
                            style="display: inline-block; padding: 5px 10px;
                        background-color: blue; color: #fff; font-weight: bold; border-radius: 4px;"
                            class="badge">{{ Session('jabatan') }}</span>
                    </p>
                </div>
                <div>
                    <div class="row">
                        <!-- List Jabatan Periode -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">
                                <div class="card-body pb-0">
                                    <h5 class="card-title">Statistik Desa <span>| Peridode 2023</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nomor</th>
                                                <th scope="col">Nama Dusun</th>
                                                <th scope="col">Jumlah KK</th>
                                                <th scope="col">LK</th>
                                                <th scope="col">PR</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold" style="text-align: center">1</td>
                                                <td>Dusun 1</td>
                                                <td>229</td>
                                                <td>337</td>
                                                <td>375</td>
                                                <td>705</td>
                                                <td>
                                                    <a href="/ubah-statistik" class="btn btn-sm btn-success">Ubah</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold" style="text-align: center">2</td>
                                                <td>Dusun 2</td>
                                                <td>229</td>
                                                <td>337</td>
                                                <td>375</td>
                                                <td>705</td>
                                                <td>
                                                    <a href="/ubah-statistik" class="btn btn-sm btn-success">Ubah</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold" style="text-align: center">3</td>
                                                <td>Dusun 3</td>
                                                <td>229</td>
                                                <td>337</td>
                                                <td>375</td>
                                                <td>705</td>
                                                <td>
                                                    <a href="/ubah-statistik" class="btn btn-sm btn-success">Ubah</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold" style="text-align: center"></td>
                                                <td style="font-weight: bold">Jumlah</td>
                                                <td style="font-weight: bold">818</td>
                                                <td style="font-weight: bold">1275</td>
                                                <td style="font-weight: bold">1365</td>
                                                <td style="font-weight: bold">2640</td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- End Top Selling -->
                    </div>
        </section>

    </main><!-- End main -->
@endsection
