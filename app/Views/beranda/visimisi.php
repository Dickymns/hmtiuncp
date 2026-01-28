<?= $this->include('beranda/layouts/Header') ?>
<br><br>

<!-- Visi Misi Section -->
<section id="visimisi" class="services section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Visi dan Misi HMTI</h2>
     </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">

      <!-- Visi -->
      <div class="col-xl-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <h4><a href="#" class="stretched-link">Visi</a></h4>
          <p style="text-align: justify;"><?= esc($visimisi['visi']) ?></p>
        </div>
      </div><!-- End Visi -->

      <!-- Misi -->
      <div class="col-xl-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <h4><a href="#" class="stretched-link">Misi</a></h4>
          <p style="text-align: justify;"><?= esc($visimisi['misi']) ?></p>
        </div>
      </div><!-- End Misi -->

    </div>
  </div>

</section><!-- End Visi Misi Section -->

<?= $this->include('beranda/layouts/footer') ?>
