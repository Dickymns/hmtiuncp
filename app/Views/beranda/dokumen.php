<?= $this->include('beranda/layouts/Header') ?>

<br><br>

<!-- Dokumen Section -->
<section id="dokumen-section" class="dokumen-section section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Dokumen HMTI</h2>
  </div>

  <div class="container" data-aos="fade-up">
    <?php if (!empty($dokumen)): ?>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Nama File</th>
              <th>Deskripsi</th>
              <th>Tanggal Upload</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($dokumen as $d): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= esc($d['nama_file']) ?></td>
                <td><?= esc($d['deskripsi']) ?></td>
                <td><?= date('d M Y', strtotime($d['tanggal_upload'])) ?></td>
                <td>
                  <a href="<?= base_url('uploads/dokumen/' . $d['nama_file']) ?>" target="_black" class="btn btn-danger btn-sm">Unduh</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php else: ?>
      <p class="text-muted">Tidak ada dokumen tersedia.</p>
    <?php endif; ?>
  </div>
</section>

<?= $this->include('beranda/layouts/footer') ?>
