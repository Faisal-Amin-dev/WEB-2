<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifikasi Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow" style="max-width: 600px; margin: auto;">
        <div class="card-header bg-warning text-dark">
            <h5 class="mb-0">Formulir Modifikasi Data Tugas</h5>
        </div>
        <div class="card-body">
            <form action="index.php?action=update_tugas" method="POST">
                <input type="hidden" name="id" value="<?= htmlspecialchars($tugas['id']); ?>">
                
                <div class="mb-3">
                    <label class="form-label">Judul Tugas</label>
                    <input type="text" class="form-control" name="judul" value="<?= htmlspecialchars($tugas['judul']); ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" rows="3" required><?= htmlspecialchars($tugas['deskripsi']); ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Batas Waktu (Deadline)</label>
                    <input type="date" class="form-control" name="deadline" value="<?= htmlspecialchars($tugas['deadline']); ?>" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="index.php?action=data_tugas" class="btn btn-secondary">Membatalkan Modifikasi</a>
                    <button type="submit" class="btn btn-warning">Konfirmasi Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>