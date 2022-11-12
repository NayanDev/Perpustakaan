<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">

    <!-- Libs CSS -->

    <link href="assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="assets/libs/prismjs/themes/prism.css" rel="stylesheet" />
    <link href="assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
    <link href="assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/libs/@yaireo/tagify/dist/tagify.css" rel="stylesheet">
    <link href="assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
    <link href="assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">
    <link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <title>Dashboard | SIM - Perpustakaan</title>
</head>

<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/brand/logo/logo-icon.svg" alt="Avatar" />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link  " href="dashboard.php">
                            <i class="nav-icon fe fe-home me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#data_anggota" aria-expanded="false" aria-controls="data_anggota">
                            <i class="nav-icon fe fe-user me-2"></i> Data Anggota
                        </a>
                        <div id="data_anggota" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="daftar_anggota.php">Pendaftaran Anggota</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">Data Peminjaman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">Data Keuangan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">Laporan - Laporan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#pengolahan_koleksi" aria-expanded="false" aria-controls="pengolahan_koleksi">
                            <i class="nav-icon fe fe-book-open me-2"></i> Pengolahan Koleksi
                        </a>
                        <div id="pengolahan_koleksi" class="collapse" data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Pengolahan Koleksi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Laporan - Laporan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#sirkulasi" aria-expanded="false" aria-controls="sirkulasi">
                            <i class="nav-icon fe fe-book me-2"></i> Sirkulasi
                        </a>
                        <div id="sirkulasi" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        Peminjaman - Pengembalian
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        Peminjaman - Pengembalian Fotokopi
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        Informasi dan Laporan - Laporan
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#pelayanan_publik" aria-expanded="false" aria-controls="pelayanan_publik">
                            <i class="nav-icon fe fe-globe me-2"></i> Pelayanan Publik
                        </a>
                        <div id="pelayanan_publik" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        Pencarian Koleksi
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        Kunjungan dan Kotak Saran
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#utility" aria-expanded="false" aria-controls="utility">
                            <i class="nav-icon fe fe-lock me-2"></i> Utility Setup
                        </a>
                        <div id="utility" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="#">Setup Regional Setting</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Setup Keaktifan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond" aria-expanded="false" aria-controls="navMenuLevelSecond">
                                        Setup Pengelompokan Koleksi
                                    </a>
                                    <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link " href="setup_klass.php">Setup Klass</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="#!">Setup Divisi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="#!">Setup Seksi</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Setup Koleksi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Setup Penerbit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Setup Subyek</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Setup Ruang dan Rak</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Setup Bahasa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Setup Otoritas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="#">Setup Backup Data</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="logout.php">
                            <i class="nav-icon fe fe-power me-2"></i> Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Page Content -->
        <div id="page-content">
            <div class="header">
                <!-- navbar -->
                <nav class="navbar-default navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#">
                        <i class="fe fe-menu"></i>
                    </a>
                    <div class="ms-lg-3 d-none d-md-none d-lg-block">
                        <!-- Form -->
                        <form class="d-flex align-items-center">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <input type="search" class="form-control form-control-sm ps-6" placeholder="Search Entire Dashboard" />
                        </form>
                    </div>
                    <!--Navbar nav -->
                    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
                        <li class="dropdown stopevent">
                            <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted" href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg" aria-labelledby="dropdownNotification">
                                <div class=" ">
                                    <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                        <span class="h4 mb-0">Notifications</span>
                                        <a href="# " class="text-muted">
                                            <span class="align-middle">
                                                <i class="fe fe-settings me-1"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- List group -->
                                    <ul class="list-group list-group-flush notification-list-scroll">
                                        <li class="list-group-item bg-light">
                                            <div class="row">
                                                <div class="col">
                                                    <a class="text-body" href="#">
                                                        <div class="d-flex">
                                                            <img src="assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
                                                            <div class="ms-3">
                                                                <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                                                                <p class="mb-3">
                                                                    Krisitn Watsan like your comment on course
                                                                    Javascript Introduction!
                                                                </p>
                                                                <span class="fs-6 text-muted">
                                                                    <span><span class="fe fe-thumbs-up text-success me-1"></span>2 hours ago,</span>
                                                                    <span class="ms-1">2:19 PM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-auto text-center me-2">
                                                    <a href="#" class="badge-dot bg-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read">
                                                    </a>
                                                    <div>
                                                        <a href="#" class="bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove">
                                                            <i class="fe fe-x text-muted"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col">
                                                    <a class="text-body" href="#">
                                                        <div class="d-flex">
                                                            <img src="assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle" />
                                                            <div class="ms-3">
                                                                <h5 class="fw-bold mb-1">Brooklyn Simmons</h5>
                                                                <p class="mb-3">
                                                                    Just launched a new Courses React for Beginner.
                                                                </p>
                                                                <span class="fs-6 text-muted">
                                                                    <span><span class="fe fe-thumbs-up text-success me-1"></span>Oct 9,</span>
                                                                    <span class="ms-1">1:20 PM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-auto text-center me-2">
                                                    <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col">
                                                    <a class="text-body" href="#">
                                                        <div class="d-flex">
                                                            <img src="assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle" />
                                                            <div class="ms-3">
                                                                <h5 class="fw-bold mb-1">Jenny Wilson</h5>
                                                                <p class="mb-3">
                                                                    Krisitn Watsan like your comment on course
                                                                    Javascript Introduction!
                                                                </p>
                                                                <span class="fs-6 text-muted">
                                                                    <span><span class="fe fe-thumbs-up text-info me-1"></span>Oct 9,</span>
                                                                    <span class="ms-1">1:56 PM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-auto text-center me-2">
                                                    <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col">
                                                    <a class="text-body" href="#">
                                                        <div class="d-flex">
                                                            <img src="assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle" />
                                                            <div class="ms-3">
                                                                <h5 class="fw-bold mb-1">Sina Ray</h5>
                                                                <p class="mb-3">
                                                                    You earn new certificate for complete the Javascript
                                                                    Beginner course.
                                                                </p>
                                                                <span class="fs-6 text-muted">
                                                                    <span><span class="fe fe-award text-warning me-1"></span>Oct 9,</span>
                                                                    <span class="ms-1">1:56 PM</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-auto text-center me-2">
                                                    <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="border-top px-3 pt-3 pb-0">
                                        <a href="pages/notification-history.html" class="text-link fw-semi-bold">
                                            See all Notifications
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- List -->
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="dropdown-item">
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1">Annette Black</h5>
                                            <p class="mb-0 text-muted">annette@geeksui.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li class="dropdown-submenu dropstart-lg">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                            <i class="fe fe-circle me-2"></i> Status
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-success me-2"></span> Online
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-secondary me-2"></span> Offline
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-warning me-2"></span> Away
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span class="badge-dot bg-danger me-2"></span> Busy
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/profile-edit.html">
                                            <i class="fe fe-user me-2"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/student-subscriptions.html">
                                            <i class="fe fe-star me-2"></i> Subscription
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="fe fe-settings me-2"></i> Settings
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="index.html">
                                            <i class="fe fe-power me-2"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>