<?= $this->include('beranda/layouts/Header') ?>
<br><br>
<!-- Struktur Pengurus Section -->
<section id="team" class="team section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Struktur Kepengurusan</h2>
  </div>

  <div class="container">
    <div class="row gy-4">
      <?php foreach ($pengurus as $p): ?>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member d-flex align-items-start">
            <div class="pic">
              <img src="<?= base_url('uploads/' . $p['foto']) ?>" class="img-fluid" alt="<?= esc($p['nama']) ?>">
            </div>
            <div class="member-info">
              <h4><?= esc($p['nama']) ?></h4>
              <span><?= esc($p['jabatan']) ?></span>
              <p><?= esc($p['nim']) ?></p>
              <div class="social">
                <!-- Kosongkan atau tambahkan jika ada sosial media -->
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?= $this->include('beranda/layouts/footer') ?>
