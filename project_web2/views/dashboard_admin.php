<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasbor Administrator - Sistem Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar { min-height: 100vh; background-color: #343a40; }
        .sidebar a { color: #cfd8dc; text-decoration: none; padding: 10px 15px; display: block; }
        .sidebar a:hover { background-color: #495057; color: #fff; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block sidebar py-3">
                <div class="position-sticky">
                    <h5 class="text-white px-3 pb-3 border-bottom">Panel Admin</h5>
                    <ul class="nav flex-column mt-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?action=dashboard">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Data Dosen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=data_mahasiswa">Data Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=data_tugas">Data Tugas</a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="nav-link text-danger" href="index.php?action=logout">Keluar</a>
                        </li>
                    </ul>
                </div>
            </nav>

           <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Beranda Administrator</h1>
            </div>

            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">
                    Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!
                </h4>
                <p>Anda telah berhasil login ke dalam sistem sebagai <strong>Admin</strong>. Gunakan menu di samping untuk mengelola data.</p>
            </div>
        </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>