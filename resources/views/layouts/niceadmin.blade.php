<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Perpustakaan Unama</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('bebas') }}/assets/img/unama.png" rel="icon">
    <link href="assets/img/unama.png" rel="unama-icon">

    <!-- Google Fonts -->
    <link href="{{ asset('bebas') }}/https://fonts.gstatic.com" rel="preconnect">
    <link
        href="{{ asset('bebas') }}/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('bebas') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('bebas') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('bebas') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('bebas') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('bebas') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('bebas') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('bebas') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('bebas') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/dashboard" class="logo d-flex align-items-center">
                <img src="{{ asset('bebas') }}/assets/img/unama.png" alt="">
                <!-- <i class="bi bi-book-half"></i> -->
                <span class="d-none d-lg-block">Perpustakaan Unama</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number"></span>
                    </a><!-- End Notification Icon -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number"></span>
                    </a><!-- End Messages Icon -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('bebas') }}/assets/img/profile-img.png" alt="Profile"
                            class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6></h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>



                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{ url('dashboard', []) }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-person-circle"></i><span>Anggota</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('anggota', []) }}">
                            <i class="bi bi-circle"></i><span>Tampil Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('anggota/create', []) }}">
                            <i class="bi bi-circle"></i><span>Tambah Data</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Buku</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('buku', []) }}">
                            <i class="bi bi-circle"></i><span>Tampil Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('buku/create', []) }}">
                            <i class="bi bi-circle"></i><span>Tambah Data</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Peminjaman</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('peminjaman', []) }}">
                            <i class="bi bi-circle"></i><span>Tampil Peminjaman</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('peminjaman/create', []) }}">
                            <i class="bi bi-circle"></i><span>Tambah Peminjaman</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('pengembalian') }}">
                            <i class="bi bi-circle"></i><span>Buku Dikembalikan</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-heading">Other</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-printer"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('anggota/laporan/cetak', []) }}">
                            <i class="bi bi-circle"></i><span>Laporan Anggota</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('buku/laporan/cetak', []) }}">
                            <i class="bi bi-circle"></i><span>Laporan Buku</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('peminjaman/laporan/cetak', []) }}">
                            <i class="bi bi-circle"></i><span>Laporan Peminjaman</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('pengembalian/laporan/cetak', []) }}">
                            <i class="bi bi-circle"></i><span>Laporan Pengembalian</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/">
                    <i class="bi bi-house-door-fill"></i>
                    <span>Home</span>
                </a>
            </li><!-- End Blank Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">

            @if (Session::has('pesan'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('pesan') }}
                </div>
            @endif

            <h1 class="breadcrumb-item"><a href="/dashboard">Dashboard</a></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">{{ request()->path() }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        @yield('isinya')

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">
                    <div class="row">

                    </div>
                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>DHXMS</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Edited with <a href="https://github.com/ryuzenc/tugas_perpustakaans/">❤</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('bebas') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/quill/quill.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('bebas') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('bebas') }}/assets/js/main.js"></script>

</body>

</html>
