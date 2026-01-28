<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Data Program Kerja</h1>
    <a href="<?= base_url('admin/proker/add') ?>" class="btn btn-primary mb-3">Tambah Proker</a>

    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama Kegiatan</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($proker as $item): ?>
                        <tr>
                            <td>
                                <?php if ($item['foto']): ?>
                                    <img src="<?= base_url('uploads/proker/' . $item['foto']) ?>" width="80">
                                <?php endif; ?>
                            </td>
                            <td><?= esc($item['nama_kegiatan']) ?></td>
                            <td><?= esc($item['deskripsi']) ?></td>
                            <td><?= esc($item['tanggal_pelaksanaan']) ?></td>
                            <td>
                                <a href="<?= base_url('admin/proker/edit/' . $item['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= base_url('admin/proker/delete/' . $item['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->include('admin/layouts/footer') ?>
