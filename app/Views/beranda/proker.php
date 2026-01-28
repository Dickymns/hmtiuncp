<?= $this->include('beranda/layouts/Header') ?>

<br><br>

<section id="proker-section" class="section">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Program Kerja HMTI</h2>
      <p>Berikut adalah daftar program kerja HMTI.</p>
    </div>

    <!-- Daftar Proker -->
<div class="row gy-4">
  <?php foreach ($proker as $p): ?>
    <div class="col-lg-4">
      <article class="shadow p-3 rounded border">
        <div class="post-img mb-2">
          <img 
            src="<?= base_url('uploads/proker/' . $p['foto']) ?>" 
            alt="Foto Proker" 
            class="img-fluid rounded" 
            width="100%">
        </div>

        <h2 class="title">
          <a href="<?= base_url('beranda/proker/' . $p['id']) ?>">
            <?= esc($p['nama_kegiatan']) ?>
          </a>
        </h2>

        <div class="meta-top">
          <ul class="list-inline small text-muted">
            <li class="list-inline-item">
              <i class="bi bi-calendar"></i> 
              <?= date('d M Y', strtotime($p['tanggal_pelaksanaan'])) ?>
            </li>
          </ul>
        </div>

        <div class="content">
          <p><?= character_limiter(strip_tags($p['deskripsi']), 100) ?></p>
          <div class="read-more">
            <a href="<?= base_url('beranda/proker/' . $p['id']) ?>">Read More</a>
          </div>
        </div>
      </article>
    </div>
  <?php endforeach; ?>
</div>

<!-- PAGINATION -->
<div class="mt-4">
  <?= $pager->links() ?>
</div>
  </div>
</section>

<?= $this->include('beranda/layouts/footer') ?>
