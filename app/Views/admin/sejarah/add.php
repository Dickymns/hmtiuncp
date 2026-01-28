<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Sejarah</h1>
    <form action="<?= base_url('admin/sejarah/add') ?>" method="post">
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= base_url('admin/sejarah') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->include('admin/layouts/footer') ?>
