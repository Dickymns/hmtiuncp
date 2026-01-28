<?= $this->include('beranda/layouts/Header') ?>
<br><br>

<!-- Profil Section -->
<section id="profil-section" class="profil-section section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Profil HMTI</h2>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up">
    <?php foreach ($profil as $item): ?>
      <p style="text-align: justify;"><?= esc($item['deskripsi']) ?></p>
    <?php endforeach; ?>
  </div>
</section>

<?= $this->include('beranda/layouts/footer') ?>
