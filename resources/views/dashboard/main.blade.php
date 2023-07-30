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
                    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="/statistik">
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
                    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="/statistik">
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
                    <a class="nav-link collapsed" href="users-profile.html">
                        <i class="bi bi-person"></i>
                        <span>Daftar Warga</span>
                    </a>
                </li><!-- End Profile Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="/statistik">
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
                    <p>Selamat datang, <span id="nama user"><strong>{{ Session('nama') }}Sari</strong></span>
                        Anda masuk sebagai <span
                            style="display: inline-block; padding: 5px 10px;
                        background-color: blue; color: #fff; font-weight: bold; border-radius: 4px;"
                            class="badge">{{ Session('jabatan') }}</span>
                    </p>
                </div>
                <div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Absensi</h5>
                                    @if ($currentTime > '05:00:00')
                                        <p>Waktu Untuk Absen Sudah Berlalu</p>
                                    @else
                                        <p>Lakukan Absensi Sebelum Pukul 09.00 WIB!</p>
                                    @endif
                                    <!-- Basic Modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#basicModal">
                                        Absensi
                                    </button>
                                    <div class="modal fade" id="basicModal" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Absensi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                @if ($currentTime > '05:00:00')
                                                    <div class="modal-body">
                                                        Waktu Untuk Absen Sudah Berlalu
                                                    </div>
                                                @else
                                                    <div class="modal-body">
                                                        Harap Melakukan Absensi Sebelum Pukul 09.00 WIB
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="/absenproses">
                                                            <button type="button" class="btn btn-success">Masuk</button>
                                                        </a>
                                                        <a href="/izin">
                                                            <button type="button" class="btn btn-danger">Tidak
                                                                Masuk</button>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div><!-- End Basic Modal-->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-body" style="background-image:url('')">
                                    <h5 class="card-title">DESA PAYAKABUNG</h5>
                                    <p>Kecamatan Indralaya Utara, Kabupater Ogan Ilir, Sumatra Selatan</p>
                                    <p>Kode Pos. 30812</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-info text-center">
                                    <img src="assets/img/penduduk.png" class="card-logo img-fluid" alt="Logo 1">
                                    <h2>Jumlah Penduduk</h2>
                                    <div class="info-item">
                                        <span class="info-label">Total:</span>
                                        <span class="info-value">10.000</span>
                                    </div>
                                    <a href="">Info Detail</a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card-info text-center">
                                    <img src="assets/img/wilayah.png" class="card-logo img-fluid" alt="Logo 2">
                                    <h2>Luas Wilayah</h2>
                                    <div class="info-item">
                                        <span class="info-label">Total:</span>
                                        <span class="info-value">50 km²</span>
                                    </div>
                                    <a href="">Info Detail</a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card-info text-center">
                                    <img src="assets/img/family.png" class="card-logo img-fluid" alt="Logo 3">
                                    <h2>Jumlah Keluarga</h2>
                                    <div class="info-item">
                                        <span class="info-label">Total:</span>
                                        <span class="info-value">3.000</span>
                                    </div>
                                    <a href="">Info Detail</a>
                                </div>
                            </div>
                            <style>
                                .card-info {
                                    background-color: #fff;
                                    border: 1px solid #ddd;
                                    border-radius: 5px;
                                    padding: 20px;
                                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                                    margin: 10px;
                                    position: relative;
                                    overflow: hidden;
                                }

                                .card-logo {
                                    width: 50px;
                                    height: 50px;
                                    margin-bottom: 10px;
                                    transition: transform 0.3s ease;
                                }

                                .card-logo:hover {
                                    transform: scale(1.2);
                                }
                            </style>
                        </div>

                        <!-- List Jabatan Periode -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">
                                <div class="card-body pb-0">
                                    <h5 class="card-title">Pemerintah Desa <span>| Peridode 2023-2028</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nomor</th>
                                                <th scope="col" style="text-align: center">Foto</th>
                                                <th scope="col">Nama, NIP/NIPD, NIK</th>
                                                <th scope="col">Tempat, Tanggal Lahir</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Golongan Darah</th>
                                                <th scope="col">Agama</th>
                                                <th scope="col">Jabatan</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold" style="text-align: center">1</td>
                                                <th scope="row" style="text-align: center"><img src=""></th>
                                                <td>
                                                    <p>Nama : Abdul Rozaq M.Si</p>
                                                    <p>NIP : 197905062010011007</p>
                                                    <p>NIK : 5201140506790001</p>
                                                </td>
                                                <td class="fw-bold">Palembang, 19 JULI 1968</td>
                                                <td>Pria</td>
                                                <td>AB</td>
                                                <td>ISLAM</td>
                                                <td>Kepala Desa</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-success">Ubah</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold" style="text-align: center">2</td>
                                                <th scope="row" style="text-align: center"><img src=""></th>
                                                <td>
                                                    <p>Nama : Riza Darmawangsa S.T</p>
                                                    <p>NIP : 197905062010011007</p>
                                                    <p>NIK : 5201140506790001</p>
                                                </td>
                                                <td class="fw-bold">Palembang, 21 MARET 1978</td>
                                                <td>Pria</td>
                                                <td>O</td>
                                                <td>ISLAM</td>
                                                <td>Sekretaris Desa</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-success">Ubah</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold" style="text-align: center">3</td>
                                                <th scope="row" style="text-align: center"><img src=""></th>
                                                <td>
                                                    <p>Nama : Ahmad Naufal S.Kom</p>
                                                    <p>NIP : 197905062010011007</p>
                                                    <p>NIK : 5201140506790001</p>
                                                </td>
                                                <td class="fw-bold">Palembang, 22 Februari 2003</td>
                                                <td>Pria</td>
                                                <td>O</td>
                                                <td>ISLAM</td>
                                                <td>Kepala Divisi Teknologi</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-success">Ubah</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold" style="text-align: center">4</td>
                                                <th scope="row" style="text-align: center"><img src=""></th>
                                                <td>
                                                    <p>Nama : Ghina Rauda S.E</p>
                                                    <p>NIP : 197905062010011007</p>
                                                    <p>NIK : 5201140506790001</p>
                                                </td>
                                                <td class="fw-bold">Palembang, 26 Februari 2003</td>
                                                <td>Wanita</td>
                                                <td>B</td>
                                                <td>ISLAM</td>
                                                <td>Kepala Divisi Administrasi</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-success">Ubah</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- End Top Selling -->
                    </div>
        </section>

    </main><!-- End #main -->
@endsection
