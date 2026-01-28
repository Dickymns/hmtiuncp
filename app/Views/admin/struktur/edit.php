<?= $this->include('admin/layouts/header') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Pengurus</h1>
    <form action="<?= base_url('admin/struktur/update/' . $struktur['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="mb-3"><label>Nama</label><input type="text" name="nama" class="form-control" value="<?= esc($struktur['nama']) ?>"></div>
        <div class="mb-3"><label>NIM</label><input type="text" name="nim" class="form-control" value="<?= esc($struktur['nim']) ?>"></div>
        <div class="mb-3"><label>Jabatan</label><input type="text" name="jabatan" class="form-control" value="<?= esc($struktur['jabatan']) ?>"></div>
        <div class="mb-3">
            <label>Foto Saat Ini</label><br>
            <img src="<?= base_url('uploads/' . $struktur['foto']) ?>" width="100" class="mb-2 img-thumbnail"><br>
            <input type="file" name="foto" class="form-control">
        </div>
        <button class="btn btn-primary">Update Data</button>
        <a href="<?= base_url('admin/struktur') ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
<?= $this->include('admin/layouts/footer') ?>