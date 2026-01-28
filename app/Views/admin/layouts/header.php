<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?= $title ?? 'Dashboard - HMTI UNCP' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <style>
        /* Mengubah Background Sidebar menjadi Gradient */
        .sb-sidenav-dark {
            background: linear-gradient(180deg, #1a2a6c 0%, #2a4858 100%) !important;
            color: rgba(255, 255, 255, 0.8) !important;
        }

        /* Mengubah warna teks dan icon saat hover */
        .sb-sidenav-dark .nav-link {
            color: rgba(255, 255, 255, 0.7) !important;
            transition: all 0.3s ease;
        }

        .sb-sidenav-dark .nav-link:hover {
            color: #ffffff !important;
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }

        .sb-sidenav-dark .nav-link .sb-nav-link-icon {
            color: rgba(255, 255, 255, 0.5) !important;
        }

        /* Navigasi Aktif */
        .sb-sidenav-dark .nav-link.active {
            color: #fff !important;
            background-color: rgba(255, 255, 255, 0.15);
        }

        .sb-sidenav-dark .nav-link.active .sb-nav-link-icon {
            color: #fff !important;
        }

        /* Menghapus background hitam navbar atas */
        .sb-topnav.navbar-dark.bg-dark {
            background-color: #1a2a6c !important;
        }
    </style>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark shadow">
    <a class="navbar-brand ps-3 fw-bold" href="#">HMTI UNCP</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>
    
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search..." />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"><i class="fas fa-user-circle fa-lg"></i></a>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                <li><a class="dropdown-item" href="<?= base_url('logout') ?>"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark shadow-right" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading text-white-50">Core</div>
                    <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading text-white-50">Manajemen Konten</div>
                    <a class="nav-link" href="<?= base_url('admin/profil') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-university"></i></div>
                        Profil
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/visimisi') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-bullseye"></i></div>
                        Visi Misi
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/sejarah') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-history"></i></div>
                        Sejarah
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/proker') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-calendar-check"></i></div>
                        Proker
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/struktur') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Struktur Pengurus
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/dokumen') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-folder-open"></i></div>
                        Dokumen
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/artikel') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                        Artikel
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/forumsaran') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-comment-dots"></i></div>
                        Forum Saran
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/admin') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-shield"></i></div>
                        Admin
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content" style="background-color: #f8f9fc;">
        <main>