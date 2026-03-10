<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow" style="max-width: 600px; margin: auto;">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Form Inisiasi Data Tugas</h5>
        </div>
        <div class="card-body">
            <form action="index.php?action=simpan_tugas" method="POST">
                <div class="mb-3">
                    <label class="form-label">Judul Tugas</label>
                    <input type="text" class="form-control" name="judul" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Batas Waktu (Deadline)</label>
                    <input type="date" class="form-control" name="deadline" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="index.php?action=data_tugas" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan Entitas</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>