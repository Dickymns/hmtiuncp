<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Dokumen</h1>
    <form action="<?= base_url('admin/dokumen/store') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control">
        </div>
        <div class="mb-3">
            <label>File</label>
            <input type="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?= $this->include('admin/layouts/footer') ?>
