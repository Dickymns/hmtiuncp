<?= $this->include('admin/layouts/header') ?>

<div class="container mt-4">
    <h3>Edit Artikel</h3>
    <form action="<?= base_url('admin/artikel/update/' . $artikel['id']) ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= $artikel['judul'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Konten</label>
            <textarea name="konten" class="form-control" rows="6" required><?= $artikel['konten'] ?></textarea>
        </div>
        <div class="mb-3">
            <label>Foto Lama</label><br>
            <img src="<?= base_url('uploads/artikel/' . $artikel['foto']) ?>" width="150">
        </div>
        <div class="mb-3">
            <label>Ganti Foto (Opsional)</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="<?= base_url('admin/artikel') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->include('admin/layouts/footer') ?>
