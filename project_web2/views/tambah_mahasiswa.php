<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow" style="max-width: 600px; margin: auto;">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Form Tambah Data Mahasiswa</h5>
        </div>
        <div class="card-body">
            <form action="index.php?action=simpan_mahasiswa" method="POST">
                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="index.php?action=data_mahasiswa" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>