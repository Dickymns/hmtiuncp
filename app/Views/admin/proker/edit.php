<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Program Kerja</h1>
    <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/proker/edit/' . $proker['id']) ?>">
        <div class="mb-3">
            <label>Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" class="form-control" value="<?= esc($proker['nama_kegiatan']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required><?= esc($proker['deskripsi']) ?></textarea>
        </div>
        <div class="mb-3">
            <label>Tanggal Pelaksanaan</label>
            <input type="date" name="tanggal_pelaksanaan" class="form-control" value="<?= esc($proker['tanggal_pelaksanaan']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Foto (biarkan kosong jika tidak diubah)</label>
            <input type="file" name="foto" class="form-control">
            <?php if ($proker['foto']): ?>
                <img src="<?= base_url('uploads/proker/' . $proker['foto']) ?>" width="100">
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

<?= $this->include('admin/layouts/footer') ?>
