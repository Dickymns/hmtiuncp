<?= $this->include('admin/layouts/header') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Struktur Pengurus</h1>
    <a href="<?= base_url('admin/struktur/add') ?>" class="btn btn-primary mb-3">Tambah Data</a>
    
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-white"><i class="fas fa-table me-1"></i>Data Pengurus</div>
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($struktur as $s): ?>
                        <tr>
                            <td><img src="<?= base_url('uploads/' . $s['foto']) ?>" width="80" class="img-thumbnail"></td>
                            <td><?= esc($s['nama']) ?></td>
                            <td><?= esc($s['nim']) ?></td>
                            <td><?= esc($s['jabatan']) ?></td>
                            <td>
                                <a href="<?= base_url('admin/struktur/edit/' . $s['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('admin/struktur/delete/' . $s['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->include('admin/layouts/footer') ?>