<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasbor Mahasiswa - Sistem Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling khusus untuk sidebar agar memenuhi tinggi layar */
        .sidebar { 
            min-height: 100vh; 
            background-color: #0d6efd; /* Warna biru primer khas Bootstrap */
        }
        .sidebar a { 
            color: #e9ecef; 
            text-decoration: none; 
            padding: 12px 20px; 
            display: block; 
            border-radius: 5px;
            margin-bottom: 5px;
        }
        .sidebar a:hover, .sidebar a.active { 
            background-color: #0b5ed7; 
            color: #fff; 
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            
            <nav class="col-md-3 col-lg-2 d-md-block sidebar py-4">
                <div class="position-sticky">
                    <h5 class="text-white px-3 pb-3 border-bottom border-light">Portal Mahasiswa</h5>
                    <ul class="nav flex-column mt-4 px-2">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?action=dashboard">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Kelas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Jadwal
                            </a>
                        </li>
                        <li class="nav-item mt-5">
                            <a class="nav-link bg-danger text-white text-center" href="index.php?action=logout">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-5">
                
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-4 border-bottom">
                    <h1 class="h2">Beranda</h1>
                </div>

                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4 bg-white rounded">
                        <h3 class="card-title text-primary">
                            Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!
                        </h3>
                        <p class="card-text text-muted">
                            Ini adalah halaman dasbor utama Anda. Anda dapat mengakses berbagai menu melalui bilah navigasi di sebelah kiri.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title">Informasi Akademik</h5>
                                <hr>
                                <p class="mb-1"><strong>Program Studi:</strong> Teknik Informatika</p>
                                <p class="mb-1"><strong>Kelas:</strong> TI 4A</p>
                                <p class="mb-0"><strong>Status:</strong> <span class="badge bg-success">Aktif</span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>