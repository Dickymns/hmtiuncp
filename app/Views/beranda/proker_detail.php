<?= $this->include('beranda/layouts/Header') ?>

<br><br>
<section id="proker-detail" class="section">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <!-- Detail Program Kerja -->
      <div class="col-lg-8">
        <div class="section-title">
          <h2><?= esc($proker['nama_kegiatan']) ?></h2>
        </div>

        <img src="<?= base_url('uploads/proker/' . $proker['foto']) ?>" class="img-fluid mb-3 rounded" alt="Foto Proker">

        <p><strong>Tanggal Pelaksanaan:</strong> <?= date('d M Y', strtotime($proker['tanggal_pelaksanaan'])) ?></p>

        <div class="mt-3 mb-4">
          <?= esc($proker['deskripsi']) ?>
        </div>

        <a href="<?= base_url('beranda/proker') ?>" class="btn btn-secondary mt-3">← Kembali</a>
      </div>

      <!-- Sidebar Program Kerja Lainnya -->
      <div class="col-lg-4 sidebar">
        <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">
          <div class="recent-posts-widget widget-item">
            <h3 class="widget-title">Program Kerja Lainnya</h3>

            <?php foreach ($daftarProker as $item): ?>
              <div class="post-item d-flex mb-3">
                <img src="<?= base_url('uploads/proker/' . $item['foto']) ?>" alt="<?= esc($item['nama_kegiatan']) ?>" class="flex-shrink-0 me-3" style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                <div>
                  <h6 class="mb-1">
                    <a href="<?= base_url('beranda/proker/' . $item['id']) ?>"><?= esc($item['nama_kegiatan']) ?></a>
                  </h6>
                  <small><?= date('d M Y', strtotime($item['tanggal_pelaksanaan'])) ?></small>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <!-- Tombol Share -->
        <div class="mb-4">
          <h6>Bagikan ke:</h6>
          <?php
            $url = current_url();
            $title = esc($proker['nama_kegiatan']);
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

  </div>
</section>

<?= $this->include('beranda/layouts/footer') ?>
