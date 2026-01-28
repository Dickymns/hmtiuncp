<?= $this->include('beranda/layouts/header') ?>

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <p>SELAMAT DATANG DI WEBSITE</p>
            <h1>HIMPUNAN MAHASISWA INFORMATIKA - <font color="black">UNCP</font></h1>
            <p>Kami bergerak di bidang keilmuan dan pengembangan teknologi dengan semangat kolaboratif dan inovatif untuk mendukung potensi mahasiswa dalam menghadapi era digital.</p>
            <div class="d-flex">
              <a href="<?= base_url('beranda/artikel') ?>" class="btn-get-started">Berita Terbaru</a>
                </div>
          </div>
          <div class="col-lg-6 order-2 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="./arsha/assets/img/logohmti.png" class="img-fluid animated" alt="" width="450">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->
    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Profil Hmti</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p style="text-align: justify;">
            Himpunan Mahasiswa Informatika (HMTI) merupakan organisasi kemahasiswaan yang berada di 
            bawah naungan Fakultas Teknik Komputer, Program Studi Informatika, Universitas Cokroaminoto
            Palopo. Didirikan pada tanggal 24 November 2005 di Kota Palopo, HMTI hadir sebagai wadah 
            pengembangan diri dan penalaran bagi mahasiswa Informatika dalam lingkup kampus.
              Berlokasi di Kampus 1 Universitas Cokroaminoto Palopo, organisasi ini menjadi bagian 
              dari kelengkapan non-struktural di fakultas,
             yang berarti tidak berada dalam garis komando langsung dengan pihak universitas.
          </p>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p style="text-align: justify;">HMTI memiliki tujuan utama untuk membina kesadaran intelektual dan spiritual 
              mahasiswa, serta menumbuhkan rasa tanggung jawab terhadap terciptanya kehidupan 
              kampus yang ilmiah dan demokratis. Dalam pelaksanaannya, HMTI menjunjung tinggi 
              nilai-nilai moral agama, semangat kebersamaan, dan prinsip-prinsip pendidikan. 
              Organisasi ini juga bersifat independen dalam menjalankan fungsi, tugas, dan 
              tanggung jawabnya, serta memiliki otonomi dalam mengelola kegiatan dan program 
              kerjanya.

</p>
            <a href="<?= base_url('beranda/profil') ?>" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->
    
    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Bidang Bidang</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <h4><a href="" class="stretched-link">Pengembangan Dan Penalaran</a></h4>
              <p>Pengembangan dan Penalaran adalah bidang yang mendorong mahasiswa Informatika untuk mengasah kemampuan berpikir, keilmuan, dan teknologi guna mendukung perkembangan diri dan profesionalisme di bidang IT.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <h4><a href="" class="stretched-link">Data Dan Informasi</a></h4>
              <p>Data dan Informasi merupakan bidang yang bertugas mencari dan mengumpulakan data dan menyebarkan informasi agar dapat memberitahukan kepada penerima informasi tersebut, serta melakukan dokumentasi dari setiap kegiatan yang telah dilakukan</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <h4><a href="" class="stretched-link">Kerohanian</a></h4>
              <p>Bidang Kerohanian adalah bidang yang mengkoordinir kegiatan rohani dan sosial, serta berperan menjaga dan mengembangkan nilai-nilai spiritual di lingkungan mahasiswa, baik dalam kehidupan berlembaga maupun bermasyarakat.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <h4><a href="" class="stretched-link">Logistik Dan Kesekretariatan</a></h4>
              <p>Bidang ini merupakan salah satu bidang yang dimana mengurus kesekretariatan dan melakukan pengadaan yang dibutuhkan sekretariat</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    


    <!-- Subscribe Section -->
    <section id="subscribe" class="subscribe section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6">
            <div class="cta-content" data-aos="fade-up" data-aos-delay="200">
              <h2>Terhubung Bersama Kami</h2>
              <p style="text-align: justify;">Dapatkan informasi terbaru seputar kegiatan, program kerja, dan pengumuman resmi HMTI UNCP melalui media sosial kami.</p>
              <form action="forms/newsletter.php" method="post" class="php-email-form cta-form" data-aos="fade-up" data-aos-delay="300">
                <div class="input-group mb-3">
                  <div class="social-links d-flex align-items-center gap-3">
          <!-- Instagram -->
          <a href="https://www.instagram.com/hmti.uncp24?igsh=cGQwZjJtYnM4bWFu&utm_source=qr" target="_blank" aria-label="Instagram">
            <i class="bi bi-instagram fs-4"></i>
          </a>
          
          <!-- YouTube -->
          <a href="https://youtube.com/@hmtiuncp24?si=wXoEubftxK7SSDkw" target="_blank" aria-label="YouTube">
            <i class="bi bi-youtube fs-4"></i>
          </a>
          
          <!-- TikTok -->
          <a href="https://www.tiktok.com/@hmti.uncp24?_t=ZS-8yJPKadCF7K&_r=1" target="_blank" aria-label="TikTok">
            <i class="bi bi-tiktok fs-4"></i>
          </a>
        </div>
      </div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your subscription request has been sent. Thank you!</div>
              </form>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cta-image" data-aos="zoom-out" data-aos-delay="200">
              <img src="./arsha/assets/img/cta/iyut.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Subscribe Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>KONTAK</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>Jalan Latammacelling No. 09-B, Kelurahan Amassangan, Kecamatan Wara, Kota Palopo, Sulawesi Selatan. </p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Telepon</h3>
                  <p>082195543569</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>hmtiuncp24@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

                </div>
          </div>

          <div class="col-lg-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15937.331249058896!2d120.1897472!3d-3.0048255999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d915fbd7fd0a963%3A0xfd959210dc86d7d0!2sSekretariat%20Hmti%20Uncp!5e0!3m2!1sen!2sid!4v1753340240062!5m2!1sen!2sid" 
            frameborder="0" style="border:0; 
            width: 100%; height: 350px;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
          
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

    <?= $this->include('beranda/layouts/footer') ?>
