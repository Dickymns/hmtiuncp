<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Program Kerja</h1>
    <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/proker/add') ?>">
        <div class="mb-3">
            <label>Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Tanggal Pelaksanaan</label>
            <input type="date" name="tanggal_pelaksanaan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?= $this->include('admin/layouts/footer') ?>
