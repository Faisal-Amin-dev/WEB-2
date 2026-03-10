<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa - Sistem Akademik</title>
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
                        <a class="nav-link" href="index.php?action=dashboard">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?action=data_mahasiswa">Data Mahasiswa</a>
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
                <h1 class="h2">Data Mahasiswa</h1>
            </div>

            <a href="index.php?action=tambah_mahasiswa" class="btn btn-primary mb-3">
                + Tambah Data Mahasiswa
            </a>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($data_mahasiswa)): ?>
                            <?php foreach ($data_mahasiswa as $index => $mahasiswa): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= htmlspecialchars($mahasiswa['nim']) ?></td>
                                    <td><?= htmlspecialchars($mahasiswa['nama']) ?></td>
                                    <td><?= htmlspecialchars($mahasiswa['email']) ?></td>
                                    <td>
                                        <a href="index.php?action=edit_mahasiswa&id=<?= $mahasiswa['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="index.php?action=hapus_mahasiswa&id=<?= $mahasiswa['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data mahasiswa.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
</body>
</html>