<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Sejarah</h1>
    <form action="<?= base_url('admin/sejarah/edit/'.$row['id']) ?>" method="post">
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required><?= esc($row['deskripsi']) ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('admin/sejarah') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->include('admin/layouts/footer') ?>
