<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Dokumen</h1>
    <form action="<?= base_url('admin/dokumen/update/' . $dokumen['id']) ?>" method="post">
        <div class="mb-3">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" value="<?= $dokumen['deskripsi'] ?>" class="form-control">
        </div>
        <p><strong>File saat ini:</strong> <?= $dokumen['nama_file'] ?></p>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?= $this->include('admin/layouts/footer') ?>
