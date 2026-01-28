<?= $this->include('beranda/layouts/Header') ?>
<br><br>

<section id="artikel-section" class="section">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Artikel</h2>
    </div>

    <div class="row gy-4">
      <?php foreach ($artikel as $a): ?>
        <div class="col-lg-4">
          <article class="shadow p-3 rounded border">
            <div class="post-img mb-2">
              <img src="<?= base_url('uploads/artikel/' . $a['foto']) ?>" alt="Foto Artikel" class="img-fluid rounded" style="height:200px;object-fit:cover;">
            </div>
            <h2 class="title">
              <a href="<?= base_url('beranda/artikel/' . $a['id']) ?>"><?= esc($a['judul']) ?></a>
            </h2>
            <div class="meta-top">
              <ul class="list-inline small text-muted">
                <li class="list-inline-item">
                  <i class="bi bi-calendar"></i> <?= date('d M Y', strtotime($a['tanggal'])) ?>
                </li>
              </ul>
            </div>
            <div class="content">
              <p><?= character_limiter(strip_tags($a['konten']), 100) ?></p>
              <div class="read-more">
                <a href="<?= base_url('beranda/artikel/' . $a['id']) ?>">Read More</a>
              </div>
            </div>
          </article>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
      <?= $pager->links() ?>
    </div>
  </div>
</section>

<?= $this->include('beranda/layouts/footer') ?>
