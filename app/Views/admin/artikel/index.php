<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Data Artikel</h1>
    <a href="<?= base_url('admin/artikel/add') ?>" class="btn btn-primary mb-3">Tambah Artikel</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Foto</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($artikel as $row): ?>
                        <tr>
                            <td><?= $row['judul'] ?></td>
                            <td><img src="<?= base_url('uploads/artikel/' . $row['foto']) ?>" width="100"></td>
                            <td><?= $row['tanggal'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/artikel/edit/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('admin/artikel/delete/' . $row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->include('admin/layouts/footer') ?>
