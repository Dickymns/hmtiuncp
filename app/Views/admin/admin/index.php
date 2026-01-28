<?= $this->include('admin/layouts/header') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Kelola Admin</h1>
    <a href="<?= base_url('admin/admin/add') ?>" class="btn btn-primary mb-3">+ Tambah Admin</a>
    <div class="card mb-4">
        <div class="card-header">Data Admin</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead><tr><th>#</th><th>Username</th><th>Aksi</th></tr></thead>
                <tbody>
                    <?php $no = 1; foreach ($admins as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($row['username']) ?></td>
                        <td>
                            <a href="<?= base_url('admin/admin/edit/' . $row['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= base_url('admin/admin/delete/' . $row['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->include('admin/layouts/footer') ?>
