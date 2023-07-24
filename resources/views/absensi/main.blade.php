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
                    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-bar-chart"></i><span>Statistik Kependudukan</span>
                    </a>
                </li><!-- End Charts Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="pages-contact.html">
                        <i class="bi bi-envelope"></i>
                        <span>Administrasi</span>
                    </a>
                </li><!-- End Contact Page Nav -->

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
                    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-bar-chart"></i><span>Statistik Kependudukan</span>
                    </a>
                </li><!-- End Charts Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="pages-contact.html">
                        <i class="bi bi-envelope"></i>
                        <span>Administrasi</span>
                    </a>
                </li><!-- End Contact Page Nav -->
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
                    <a class="nav-link collapsed" href="users-profile.html">
                        <i class="bi bi-person"></i>
                        <span>Daftar Warga</span>
                    </a>
                </li><!-- End Profile Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-bar-chart"></i><span>Statistik Kependudukan</span>
                    </a>
                </li><!-- End Charts Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="pages-contact.html">
                        <i class="bi bi-envelope"></i>
                        <span>Administrasi</span>
                    </a>
                </li><!-- End Contact Page Nav -->

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
            <h1>Absensi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item active">Absensi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="User Greetings">
                    <p>Selamat datang, <span id="nama user"><strong>{{ Session('nama') }}Sari</strong></span>
                        Anda masuk sebagai <span
                            style="display: inline-block; padding: 5px 10px;
                        background-color: blue; color: #fff; font-weight: bold; border-radius: 4px;"
                            class="badge">{{ Session('jabatan') }}admin</span>
                    </p>
                </div>

                <!-- Left side columns -->
                <div>
                    <div class="row">




                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                                        <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                                        <li><a class="dropdown-item" href="#">Tahun</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Daftar Absensi<span>| Hari Ini</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jabatan</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">001</th>
                                                <td><a href="3"class="text-primary">Abdul Rozaq M.Si</a></td>
                                                <td>Kepala Desa</td>
                                                <td>Hadir</td>
                                                <td>
                                                    <!-- Basic Modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                        data-bs-target="#basicModal">
                                                        Keterangan
                                                    </button>
                                                    <div class="modal fade" id="basicModal" tabindex="-1">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Detail</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Telah melakukan absensi pukul 08.34 WIB
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- End Basic Modal-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">016</th>
                                                <td><a href="3"class="text-primary">Ahmad Naufak S.Kom</a></td>
                                                <td>Kepala Divisi Solusi Teknologi</td>
                                                <td>Tidak Hadir</td>
                                                <td>
                                                    <!-- Basic Modal -->
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#basicModal2">
                                                        Keterangan
                                                    </button>
                                                    <div class="modal fade" id="basicModal2" tabindex="-1">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Detail</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>tidak dapat masuk dikarenan sakit</p>
                                                                    <p>berikut surat istirahat dari dokter : </p>
                                                                    <img src="" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- End Basic Modal-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">004</th>
                                                <td><a href="3"class="text-primary">Ghina Rauda S.E</a></td>
                                                <td>Kepala Divisi Adminitrasi</td>
                                                <td>Hadir</td>
                                                <td>
                                                    <!-- Basic Modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                        data-bs-target="#basicModal3">
                                                        Keterangan
                                                    </button>
                                                    <div class="modal fade" id="basicModal3" tabindex="-1">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Detail</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Telah melakukan absensi pukul 08.37 WIB
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- End Basic Modal-->
                                                </td>
                                            </tr>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->


                    </div>
                </div>



            </div>
        </section>

    </main><!-- End #main -->
@endsection
