<?= $this->include('admin/layouts/header') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Admin</h1>
    <form action="<?= base_url('admin/admin/edit/' . $admin['id']) ?>" method="post">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?= esc($admin['username']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Password (Isi jika ingin mengganti)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
<?= $this->include('admin/layouts/footer') ?>
