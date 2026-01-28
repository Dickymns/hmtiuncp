<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Profil HMTI</h1>
    <form action="<?= base_url('admin/profil/add') ?>" method="post">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="5" required></textarea>
        </div>
        <button class="btn btn-success" type="submit">Simpan</button>
    </form>
</div>
 
<?= $this->include('admin/layouts/footer') ?>
