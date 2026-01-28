<?= $this->include('admin/layouts/header') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Admin</h1>
    <form action="<?= base_url('admin/admin/add') ?>" method="post">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->include('admin/layouts/footer') ?>
