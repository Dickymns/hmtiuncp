<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Sejarah</h1>
    <a href="<?= base_url('admin/sejarah/add') ?>" class="btn btn-primary mb-3">Tambah Sejarah</a>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row): ?>
                        <tr>
                            <td><?= esc($row['deskripsi']) ?></td>
                            <td>
                                <a href="<?= base_url('admin/sejarah/edit/'.$row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('admin/sejarah/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->include('admin/layouts/footer') ?>
