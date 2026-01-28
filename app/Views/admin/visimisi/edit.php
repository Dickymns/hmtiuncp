<?= $this->include('admin/layouts/header') ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Visi Misi</h1>
    <form action="<?= base_url('admin/visimisi/edit/'.$visimisi['id']) ?>" method="post">
        <div class="mb-3">
            <label>Visi</label>
            <textarea name="visi" class="form-control" required><?= esc($visimisi['visi']) ?></textarea>
        </div>
        <div class="mb-3">
            <label>Misi</label>
            <textarea name="misi" class="form-control" required><?= esc($visimisi['misi']) ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?= base_url('admin/visimisi') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->include('admin/layouts/footer') ?>
