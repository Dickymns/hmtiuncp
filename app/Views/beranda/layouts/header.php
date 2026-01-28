<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>HMTI UNCP</title>

  <link href="<?= base_url('arsha/assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('arsha/assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="<?= base_url('arsha/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('arsha/assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('arsha/assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('arsha/assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <link href="<?= base_url('arsha/assets/css/main.css') ?>" rel="stylesheet">
  <style>
    /* CSS RESET KHUSUS MOBILE */
    @media (max-width: 1199px) {
      /* POSISI ICON TETAP (Sesuai Permintaan) */
      .mobile-nav-toggle {
        display: block !important;
        position: fixed !important;
        right: 10px;
        top: 10px;
        font-size: 35px !important;
        color: #37517e !important;
        cursor: pointer !important;
        z-index: 99999 !important;
        background: #fff;
        border-radius: 5px;
        padding: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
      }

      /* Sembunyikan Navigasi Bawaan Arsha */
      .navmenu { display: none !important; }

      /* TAMPILAN MENU SEPERTI GAMBAR CONTOH (DROPDOWN KANAN) */
      #custom-ms-menu {
        display: none;
        position: fixed;
        right: 10px;    /* Sejajar dengan tombol toggle */
        top: 65px;     /* Muncul tepat di bawah tombol toggle */
        width: 260px;   /* Lebar box menu */
        height:600px;
        background: #ffffff; 
        z-index: 99998;
        padding: 0;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15); /* Shadow agar melayang */
        border: 1px solid #eee;
        overflow: hidden; /* Memastikan border radius memotong list */
      }

      #custom-ms-menu.active {
        display: block !important;
        animation: fadeInDown 0.3s ease; /* Animasi muncul halus */
      }

      #custom-ms-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left; /* Rata kiri sesuai contoh SMKN 2 */
      }

      #custom-ms-menu ul li { 
        border-bottom: 1px solid #f8f9fa; 
      }

      #custom-ms-menu ul li:last-child { border-bottom: none; }

      #custom-ms-menu ul li a {
        color: #131518 !important; 
        font-size: 16px;
        font-weight: 500;
        text-decoration: none;
        display: block;
        padding: 15px 20px; /* Padding lebih luas agar mudah diklik jari */
        transition: 0.3s;
      }

      #custom-ms-menu ul li a:hover {
        background: #f8f9fa;
        padding-left: 25px; /* Efek geser sedikit saat hover */
      }

      /* Logo Responsif */
      .header .logo img { max-height: 35px; }
      .main-text { font-size: 11px; font-weight: 800; color: #37517e; }
      .sub-text { font-size: 8px; font-weight: 600; color: #37517e; }
      .logo-text { line-height: 1.1; display: flex; flex-direction: column; margin-left: 10px; }
    }
    /* --- UNTUK MOBILE MENU --- */
    #custom-ms-menu ul li a:hover {
      background: #f8f9fa;
      padding-left: 25px; /* Efek geser sedikit */
      color: #ff0000 !important; /* Warna teks berubah jadi merah saat hover */
    }

    /* --- UNTUK DESKTOP MENU (Navmenu Bawaan) --- */
    @media (min-width: 1200px) {
      .navmenu a:hover, 
      .navmenu .active, 
      .navmenu li:hover > a {
        color: #ff0000 !important; /* Warna teks jadi merah saat hover di desktop */
      }
      
      /* Jika ada dropdown di desktop, pastikan panahnya juga berubah warna */
      .navmenu a:hover i {
        color: #ff0000 !important;
      }
    }

    /* Desktop Style */
    @media (min-width: 1200px) {
      .logo-text { display: flex; flex-direction: column; margin-left: 12px; line-height: 1.1; }
      .main-text { font-size: 18px; font-weight: 800; color: #37517e; }
      .sub-text { font-size: 13px; font-weight: 600; color: #37517e; }
      .header .logo img { max-height: 55px; }
      #custom-ms-menu { display: none !important; }
    }

    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center me-auto">
      <img src="<?= base_url('arsha/assets/img/aaaa.png') ?>" alt="Logo HMTI">
      <div class="logo-text">
        </div>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="<?= base_url('/') ?>" class="<?= (current_url() == base_url('/')) ? 'active' : '' ?>">Home</a></li>
        <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="<?= base_url('beranda/profil') ?>">Profil</a></li>
            <li><a href="<?= base_url('beranda/visimisi') ?>">Visi Misi</a></li>
            <li><a href="<?= base_url('beranda/struktur_pengurus') ?>">Struktur Kepengurusan</a></li>
            <li><a href="<?= base_url('beranda/sejarah') ?>">Sejarah</a></li>
          </ul>
        </li>
        <li><a href="<?= base_url('beranda/proker') ?>">Program Kerja</a></li>
        <li><a href="<?= base_url('beranda/artikel') ?>">Berita</a></li>
        <li><a href="<?= base_url('beranda/dokumen') ?>">Dokumen</a></li>
      </ul>
    </nav>
    
 <i class="mobile-nav-toggle bi bi-list d-xl-none" id="m-btn" onclick="toggleMenu()"></i>

    </div>
  </header>

  <div id="custom-ms-menu">
    <ul>
      <li><a href="<?= base_url('/') ?>" onclick="toggleMenu()">Home</a></li>
            <li><a href="<?= base_url('beranda/profil') ?>" onclick="toggleMenu()">Profil</a></li>
            <li><a href="<?= base_url('beranda/visimisi') ?>" onclick="toggleMenu()">Visi Misi</a></li>
            <li><a href="<?= base_url('beranda/struktur_pengurus') ?>" onclick="toggleMenu()">Struktur Kepengurusan</a></li>
            <li><a href="<?= base_url('beranda/sejarah') ?>" onclick="toggleMenu()">Sejarah</a></li>
            <li><a href="<?= base_url('beranda/proker') ?>" onclick="toggleMenu()">Proker</a></li>
            <li><a href="<?= base_url('beranda/artikel') ?>" onclick="toggleMenu()">Berita</a></li>
            <li><a href="<?= base_url('beranda/dokumen') ?>" onclick="toggleMenu()">Dokumen</a></li>
    </ul>
  </div>
<script>
    function toggleMenu() {
      const menu = document.getElementById('custom-ms-menu');
      const btn = document.getElementById('m-btn');
      
      if (menu.classList.contains('active')) {
        menu.classList.remove('active');
        btn.classList.replace('bi-x', 'bi-list');
        btn.style.color = "#37517e"; 
      } else {
        menu.classList.add('active');
        btn.classList.replace('bi-list', 'bi-x');
        btn.style.color = "#37517e";
      }
    }

    // Menutup menu jika user mengklik di luar box menu
    window.onclick = function(event) {
      const menu = document.getElementById('custom-ms-menu');
      const btn = document.getElementById('m-btn');
      if (!event.target.matches('#m-btn') && !menu.contains(event.target)) {
        if (menu.classList.contains('active')) {
          menu.classList.remove('active');
          btn.classList.replace('bi-x', 'bi-list');
        }
      }
    }
  </script>
<script src="<?= base_url('arsha/assets/js/main.js') ?>" defer></script>
<main class="main">
</body>
</html>
