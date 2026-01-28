<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin Login - HMTI UNCP</title>
    <link href="<?= base_url('arsha/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    
    <style>
        body {
            background-color: #121417; /* Warna gelap background */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .login-card {
            background: #000000;
            border-radius: 20px;
            padding: 40px 30px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .login-logo {
            width: 80px;
            height: auto;
            margin-bottom: 20px;
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.2));
        }

        .login-title {
            color: #ffffff;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .login-subtitle {
            color: #a0a0a0;
            font-size: 14px;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-control {
            background-color: #e9efff !important; /* Warna input agak kebiruan sesuai gambar */
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            height: 55px;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .btn-masuk {
            background-color: #e61e1e; /* Warna merah sesuai gambar */
            border: none;
            border-radius: 8px;
            color: white;
            width: 100%;
            padding: 12px;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            margin-top: 10px;
            transition: 0.3s;
        }

        .btn-masuk:hover {
            background-color: #c41919;
            transform: translateY(-2px);
        }

        .btn-kembali {
            background: transparent;
            border: 1px solid #333;
            border-radius: 8px;
            color: #a0a0a0;
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-kembali:hover {
            border-color: #e61e1e;
            color: #ffffff;
        }

        /* Menghilangkan label floating untuk kemiripan maksimal dengan gambar */
        .form-floating > label {
            padding-left: 20px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <img src="<?= base_url('arsha/assets/img/logohmti.png') ?>" alt="Logo HMTI" class="login-logo">
        
        <div class="login-title">Admin Login</div>
        <div class="login-subtitle">HIMPUNAN MAHASISWA INFORMATIKA UNIVERSITAS COKROAMINOTO PALOPO</div>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger py-2 small" role="alert">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('login') ?>" method="post">
            <?= csrf_field() ?>
            
            <div class="form-floating mb-3">
                <input class="form-control" id="inputUsername" type="text" name="username" placeholder="Username" required />
                <label for="inputUsername">Username</label>
            </div>
            
            <div class="form-floating mb-4">
                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" required />
                <label for="inputPassword">Password</label>
            </div>

            <button class="btn-masuk" type="submit">MASUK</button>
        </form>

        <a href="<?= base_url('/') ?>" class="btn-kembali">
            <i class="fas fa-globe me-2"></i> Kembali Ke Beranda
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>