<?= $this->include('admin/layouts/header') ?>

<div class="container mt-4">
    <h3>Tambah Artikel</h3>
    <form action="<?= base_url('admin/artikel/store') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Konten</label>
            <textarea name="konten" class="form-control" rows="6" required></textarea>
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="<?= base_url('admin/artikel') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->include('admin/layouts/footer') ?>
