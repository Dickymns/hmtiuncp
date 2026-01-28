<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Visi Misi</h1>
    <form action="<?= base_url('admin/visimisi/add') ?>" method="post">
        <div class="mb-3">
            <label>Visi</label>
            <textarea name="visi" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Misi</label>
            <textarea name="misi" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= base_url('admin/visimisi') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->include('admin/layouts/footer') ?>
