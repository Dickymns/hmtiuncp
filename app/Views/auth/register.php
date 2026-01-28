<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Admin</title>
    <link href="<?= base_url('/assets/css/styles.css') ?>" rel="stylesheet" />
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header text-center"><h3>Register Admin Baru</h3></div>
                    <div class="card-body">
                        <form action="<?= base_url('register') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" name="username" placeholder="Username" required />
                                <label>Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="password" name="password" placeholder="Password" required />
                                <label>Password</label>
                            </div>
                            <button class="btn btn-success w-100" type="submit">Daftar Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>