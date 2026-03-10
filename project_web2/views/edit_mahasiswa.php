<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifikasi Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow" style="max-width: 600px; margin: auto;">
        <div class="card-header bg-warning text-dark">
            <h5 class="mb-0">Formulir Modifikasi Entitas Mahasiswa</h5>
        </div>
        <div class="card-body">
            <form action="index.php?action=update_mahasiswa" method="POST">
                
                <input type="hidden" name="id" value="<?= htmlspecialchars($mahasiswa['id']); ?>">
                
                <div class="mb-3">
                    <label class="form-label">Nomor Induk Mahasiswa (NIM)</label>
                    <input type="text" class="form-control" name="nim" value="<?= htmlspecialchars($mahasiswa['nim']); ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" value="<?= htmlspecialchars($mahasiswa['nama']); ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat Surel (Email)</label>
                    <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($mahasiswa['email']); ?>" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="index.php?action=data_mahasiswa" class="btn btn-secondary">Membatalkan Instruksi</a>
                    <button type="submit" class="btn btn-warning">Preservasi Modifikasi</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>