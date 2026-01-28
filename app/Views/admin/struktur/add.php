<?= $this->include('admin/layouts/header') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Pengurus</h1>
    <form action="<?= base_url('admin/struktur/store') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="mb-3"><label>Nama</label><input type="text" name="nama" class="form-control" required></div>
        <div class="mb-3"><label>NIM</label><input type="text" name="nim" class="form-control" required></div>
        <div class="mb-3"><label>Jabatan</label><input type="text" name="jabatan" class="form-control" required></div>
        <div class="mb-3"><label>Foto</label><input type="file" name="foto" class="form-control" required></div>
        <button class="btn btn-primary">Simpan Data</button>
        <a href="<?= base_url('admin/struktur') ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
<?= $this->include('admin/layouts/footer') ?>