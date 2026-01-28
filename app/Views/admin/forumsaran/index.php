<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Forum Saran</h1>
    <a href="<?= base_url('admin/forumsaran/add') ?>" class="btn btn-primary mb-3">Tambah Saran</a>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Saran</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row): ?>
                        <tr>
                            <td><?= esc($row['nama']) ?></td>
                            <td><?= esc($row['saran']) ?></td>
                            <td><?= esc($row['tanggal']) ?></td>
                            <td>
                                <a href="<?= base_url('admin/forumsaran/edit/'.$row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('admin/forumsaran/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->include('admin/layouts/footer') ?>
