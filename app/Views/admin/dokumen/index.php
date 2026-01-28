<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dokumen</h1>
    <a href="<?= base_url('admin/dokumen/add') ?>" class="btn btn-primary mb-3">Tambah Dokumen</a>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama File</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Upload</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dokumen as $row): ?>
                        <tr>
                            <td><?= esc($row['nama_file']) ?></td>
                            <td><?= esc($row['deskripsi']) ?></td>
                            <td><?= esc($row['tanggal_upload']) ?></td>
                            <td>
                                <a href="<?= base_url('admin/dokumen/edit/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('admin/dokumen/delete/' . $row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->include('admin/layouts/footer') ?>
