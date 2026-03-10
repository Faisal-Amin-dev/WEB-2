<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Tugas - Sistem Akademik</title>
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
                <ul class="nav flex-column mt-3">
                    <li class="nav-item"><a class="nav-link" href="index.php?action=dashboard">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Data Dosen</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=data_mahasiswa">Data Mahasiswa</a></li>
                    <li class="nav-item"><a class="nav-link active" href="index.php?action=data_tugas">Data Tugas</a></li>
                    <li class="nav-item mt-4"><a class="nav-link text-danger" href="index.php?action=logout">Keluar</a></li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-4">
            <h1 class="h2 border-bottom pb-2 mb-3">Data Tugas</h1>
            <a href="index.php?action=tambah_tugas" class="btn btn-primary mb-3">+ Tambah Tugas Baru</a>
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th><th>Judul Tugas</th><th>Deskripsi</th><th>Deadline</th><th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($data_tugas)): ?>
                            <tr><td colspan="5" class="text-center">Belum ada entitas tugas tercatat.</td></tr>
                        <?php else: ?>
                            <?php $no = 1; foreach ($data_tugas as $row): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($row['judul']); ?></td>
                                <td><?= htmlspecialchars($row['deskripsi']); ?></td>
                                <td><?= htmlspecialchars($row['deadline']); ?></td>
                                <td>
                                    <a href="index.php?action=edit_tugas&id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="index.php?action=hapus_tugas&id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?')">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
</body>
</html>