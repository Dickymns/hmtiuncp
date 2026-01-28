<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Saran</h1>
    <form action="<?= base_url('admin/forumsaran/edit/'.$data['id']) ?>" method="post">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= esc($data['nama']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Saran</label>
            <textarea name="saran" class="form-control" required><?= esc($data['saran']) ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?= base_url('admin/forumsaran') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->include('admin/layouts/footer') ?>
