<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4 mb-4 fw-bold">Manajemen Visi & Misi</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Visi Misi</li>
            </ol>
        </nav>
    </div>

    <div class="card shadow border-0 mb-4" style="border-radius: 15px;">
        <div class="card-header bg-white py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-bullseye me-2"></i>Daftar Visi & Misi</h6>
            <a href="<?= base_url('admin/visimisi/add') ?>" class="btn btn-primary btn-sm rounded-pill px-3 shadow-sm">
                <i class="fas fa-plus me-1"></i> Tambah Data
            </a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" style="border-collapse: separate;">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 text-secondary" style="border:none;">Visi</th>
                            <th class="text-secondary" style="border:none;">Misi</th>
                            <th class="text-center text-secondary" style="border:none;" width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($visimisi)): ?>
                            <?php foreach($visimisi as $row): ?>
                            <tr>
                                <td class="ps-4 fw-medium text-dark"><?= esc($row['visi']) ?></td>
                                <td class="text-muted" style="max-width: 400px;"><?= nl2br(esc($row['misi'])) ?></td>
                                <td class="text-center">
                                    <div class="btn-group shadow-sm rounded">
                                        <a href="<?= base_url('admin/visimisi/edit/'.$row['id']) ?>" class="btn btn-white btn-sm text-warning" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= base_url('admin/visimisi/delete/'.$row['id']) ?>" class="btn btn-white btn-sm text-danger" onclick="return confirm('Yakin hapus?')" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" class="text-center py-5 text-muted">Belum ada data tersedia.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    /* Menambahkan efek halus pada tabel */
    .table tbody tr {
        transition: all 0.2s;
    }
    .table tbody tr:hover {
        background-color: rgba(78, 115, 223, 0.05);
    }
    .btn-white {
        background: #fff;
        border: 1px solid #eee;
    }
    .btn-white:hover {
        background: #f8f9fc;
    }
</style>

<?= $this->include('admin/layouts/footer') ?>