<?= $this->include('admin/layouts/header') ?>
<div class="container mt-4">
    <h3>Data Profil HMTI</h3>

    <!-- Tombol Tambah -->
    <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah Data</button>

    <!-- Tabel -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($profil as $p): ?>
            <tr>
                <td><?= esc($p['judul']) ?></td>
                <td><?= esc($p['deskripsi']) ?></td>
                <td>
                    <!-- Tombol Edit -->
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $p['id'] ?>">Edit</button>
                    
                    <!-- Tombol Hapus -->
                    <a href="<?= base_url('admin/profil/delete/'.$p['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                </td>
            </tr>

            <!-- Modal Edit -->
            <div class="modal fade" id="modalEdit<?= $p['id'] ?>" tabindex="-1">
                <div class="modal-dialog">
                    <form action="<?= base_url('admin/profil/update/'.$p['id']) ?>" method="post" class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Profil</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control" value="<?= esc($p['judul']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" required><?= esc($p['deskripsi']) ?></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog">
        <form action="<?= base_url('admin/profil/store') ?>" method="post" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <form action="<?= base_url('admin/profil/store') ?>" method="post">
                <!-- form input -->
                </form>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>

<?= $this->include('admin/layouts/footer') ?>
