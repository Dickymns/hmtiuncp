<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Profil HMTI</h1>
    <a href="<?= base_url('admin/profil/add') ?>" class="btn btn-primary mb-3">Tambah Profil</a>

    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-bordered" id="datatablesSimple">
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
                                <a href="<?= base_url('admin/profil/edit/' . $p['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= base_url('admin/profil/delete/' . $p['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->include('admin/layouts/footer') ?>
