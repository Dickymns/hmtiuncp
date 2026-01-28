<?= $this->include('beranda/layouts/Header') ?>

<br><br>

<!-- Sejarah Section -->
<section id="profil-section" class="profil-section section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Sejarah HMTI</h2>
  </div>

  <div class="container" data-aos="fade-up">
    <p><?= esc($profil['deskripsi']) ?></p>
  </div>
</section>

<?= $this->include('beranda/layouts/footer') ?>
