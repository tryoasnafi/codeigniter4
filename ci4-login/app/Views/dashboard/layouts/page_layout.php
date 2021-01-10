<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dibantuin.id</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/css/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/jvectormap/jquery-jvectormap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/owl-carousel-2/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/owl-carousel-2/owl.theme.default.min.css'); ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png'); ?>" />
</head>

<body>
    <div class="container-scroller">
        <!-- Topbar -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets/images/logo-mini.svg'); ?>" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav w-100">
                    <li class="nav-item w-100">
                        <h3> Bantuin.id </h3>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                        <h6 class="p-3 mb-0">Tugas</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-file-outline text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1"></p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-web text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1"></p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-layers text-danger"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1"></p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <p class="p-3 mb-0 text-center">Lihat Semua Tugas</p>
                    </div>
                    </li>
                    </a>
                    </li>
                    <li class="nav-item dropdown border-left">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-email"></i>
                            <span class="count bg-success"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <h6 class="p-3 mb-0">Pesan</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="<?= base_url('assets/images/faces/face1.jpg'); ?>" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Nadaa mengirim pesan</p>
                                    <p class="text-muted mb-0"> 1 Menit lalu </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="<?= base_url('assets/images/faces/face3.jpg'); ?>" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Nabila mengirim pesan</p>
                                    <p class="text-muted mb-0"> 15 Menit lalu </p>
                                </div>
                            </a>

                            <div class="preview-thumbnail">
                                <div class="preview-item-content">

                                </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">2 Pesan Baru</p>
                            </div>
                    </li>
                    <li class="nav-item dropdown border-left">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <span class="count bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Pemberitahuan</h6>
                            <div class="dropdown-divider" href="statustugas.html"></div>
                            <a class="dropdown-item preview-item" a href="file:///C:/Users/Nadia/Downloads/Dibantuin.id/Dibantuin.id/template/statustugas.html">
                                <div class="preview-thumbnail" href="statustugas.html">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Status Tugas</p>
                                    <p class="text-muted ellipsis mb-0"> Lihat Progres Tugas Anda </p>
                                </div>
                            </a>

                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                </div>
                            </div>
                            </a>
                            </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                            <div class="navbar-profile">
                                <img class="img-xs rounded-circle" src="<?= base_url('assets/images/faces/face2.jpg'); ?>" alt="">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">Nadia Nurfadilla</p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                            <h6 class="p-3 mb-0">Profil</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item" href="#">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Pengaturan</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item" href="/logout">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-logout text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Keluar</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">Pengaturan lanjutan</p>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
        </nav>
        <!-- Sidebar -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="index.html"><img src="<?= base_url('assets/images/logo.svg'); ?>" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets/images/logo-mini.svg'); ?>" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="<?= base_url('assets/images/faces/face2.jpg'); ?>" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">Nadia Nurfadilla</h5>
                                <span>Anggota</span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                            <a href="/dashboard/profil" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Pengaturan Akun</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Ubah Kata Sandi</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigasi</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/dashboard">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Beranda</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#list-harga" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-bulletin-board"></i>
                        </span>
                        <span class="menu-title">List Harga</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="list-harga">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="/dashboard/harga/word">Word</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/dashboard/harga/ppt">Power Point</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/dashboard/harga/video">Video</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/dashboard/harga/design">Design Logo</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/dashboard/harga/website">Website</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/dashboard/profil">
                        <span class="menu-icon">
                            <i class="mdi mdi-account-outline"></i>
                        </span>
                        <span class="menu-title">Profil</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/dashboard/tugas">
                        <span class="menu-icon">
                            <i class="mdi mdi-calendar-multiple-check"></i>
                        </span>
                        <span class="menu-title">Status Tugas</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/dashboard/pembayaran">
                        <span class="menu-icon">
                            <i class="mdi mdi-wallet"></i>
                        </span>
                        <span class="menu-title">Status Pembayaran</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/dashboard/review">
                        <span class="menu-icon">
                            <i class="mdi mdi-heart"></i>
                        </span>
                        <span class="menu-title">Review</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/dashboard/gunakanjasa">
                        <span class="menu-icon">
                            <i class="mdi mdi-shopping"></i>
                        </span>
                        <span class="menu-title">Gunakan Jasa</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/logout">
                        <span class="menu-icon">
                            <i class="mdi mdi-logout"></i>
                        </span>
                        <span class="menu-title">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Content -->
        <div class="container-fluid page-body-wrapper">
            <?= $this->renderSection('content') ?>
        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © dibantuin.id 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"></a></span>
            </div>
        </footer>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url('assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('assets/vendors/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/progressbar.js/progressbar.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/jvectormap/jquery-jvectormap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/owl-carousel-2/owl.carousel.min.js'); ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('assets/js/off-canvas.js'); ?>"></script>
    <script src="<?= base_url('assets/js/hoverable-collapse.js'); ?>"></script>
    <script src="<?= base_url('assets/js/misc.js'); ?>"></script>
    <script src="<?= base_url('assets/js/settings.js'); ?>"></script>
    <script src="<?= base_url('assets/js/todolist.js'); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url('assets/js/dashboard.js'); ?>"></script>
    <!-- End custom js for this page -->
</body>

</html>