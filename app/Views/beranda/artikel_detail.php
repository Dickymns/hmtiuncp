<?= $this->include('beranda/layouts/Header') ?>
<br><br>

<section id="artikel-detail" class="section">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-8">
        <div class="section-title">
          <h2><?= esc($artikel['judul']) ?></h2>
        </div>

        <img src="<?= base_url('uploads/artikel/' . $artikel['foto']) ?>" class="img-fluid mb-3 rounded" alt="Foto Artikel">

        <p><strong>Tanggal:</strong> <?= date('d M Y', strtotime($artikel['tanggal'])) ?></p>

        <div class="mt-3">
          <?= $artikel['konten'] ?>
        </div>
        <a href="<?= base_url('beranda/artikel') ?>" class="btn btn-secondary mt-2">← Kembali</a>
      </div>

      <div class="col-lg-4 sidebar">
        <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">
          <div class="recent-posts-widget widget-item">
            <h3 class="widget-title">Artikel Lainnya</h3>
            <?php foreach ($daftarArtikel as $item): ?>
              <div class="post-item d-flex mb-3">
                <img src="<?= base_url('uploads/artikel/' . $item['foto']) ?>" alt="<?= esc($item['judul']) ?>" class="flex-shrink-0 me-3" style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                <div>
                  <h6 class="mb-1">
                    <a href="<?= base_url('beranda/artikel/' . $item['id']) ?>"><?= esc($item['judul']) ?></a>
                  </h6>
                  <small><?= date('d M Y', strtotime($item['tanggal'])) ?></small>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <!-- Tombol Share -->
        <div class="my-4">
          <h6>Bagikan ke:</h6>
          <?php
            $url = current_url();
            $title = esc($artikel['judul']);
          ?>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($url) ?>" target="_blank" class="btn btn-sm btn-primary me-2">
            <i class="bi bi-facebook"></i> Facebook
          </a>
          <a href="https://twitter.com/intent/tweet?url=<?= urlencode($url) ?>&text=<?= urlencode($title) ?>" target="_blank" class="btn btn-sm btn-info text-white me-2">
            <i class="bi bi-twitter-x"></i> Twitter
          </a>
          <a href="https://api.whatsapp.com/send?text=<?= urlencode($title . ' - ' . $url) ?>" target="_blank" class="btn btn-sm btn-success">
            <i class="bi bi-whatsapp"></i> WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->include('beranda/layouts/footer') ?>
