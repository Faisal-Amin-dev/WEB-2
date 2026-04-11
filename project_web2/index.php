<?php
session_start();
require_once 'models/database.php';

$action = $_GET['action'] ?? 'index';

if ($action === 'login') {
    require_once 'controller/AuthController.php';
    $authController = new AuthController($conn);
    $authController->processLogin();
} 
elseif ($action === 'logout') {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
} 
elseif ($action === 'dashboard') {
    require_once 'controller/DashboardController.php';
    $dashboardController = new DashboardController();
    $dashboardController->index();
} 
// Implementasi Rute Modul Mahasiswa
elseif ($action === 'data_mahasiswa') {
    require_once 'controller/MahasiswaController.php';
    $mahasiswaController = new MahasiswaController($conn);
    $mahasiswaController->index();
} 
elseif ($action === 'tambah_mahasiswa') {
    require_once 'controller/MahasiswaController.php';
    $mahasiswaController = new MahasiswaController($conn);
    $mahasiswaController->create(); 
}
elseif ($action === 'simpan_mahasiswa') {
    require_once 'controller/MahasiswaController.php';
    $mahasiswaController = new MahasiswaController($conn);
    $mahasiswaController->store(); 
}
// Penempatan rute ini dilakukan paralel dengan rute modul mahasiswa
elseif ($action === 'data_tugas') {
    require_once 'controller/TugasController.php';
    $tugasController = new TugasController($conn);
    $tugasController->index();
} 
elseif ($action === 'tambah_tugas') {
    require_once 'controller/TugasController.php';
    $tugasController = new TugasController($conn);
    $tugasController->create();
}
elseif ($action === 'simpan_tugas') {
    require_once 'controller/TugasController.php';
    $tugasController = new TugasController($conn);
    $tugasController->store();
}
elseif ($action === 'edit_tugas' && isset($_GET['id'])) {
    require_once 'controller/TugasController.php';
    $tugasController = new TugasController($conn);
    $tugasController->edit($_GET['id']);
}
elseif ($action === 'update_tugas') {
    require_once 'controller/TugasController.php';
    $tugasController = new TugasController($conn);
    $tugasController->update();
}
elseif ($action === 'hapus_tugas' && isset($_GET['id'])) {
    require_once 'controller/TugasController.php';
    $tugasController = new TugasController($conn);
    $tugasController->delete($_GET['id']);
}
elseif ($action === 'edit_mahasiswa' && isset($_GET['id'])) {
    require_once 'controller/MahasiswaController.php';
    $mahasiswaController = new MahasiswaController($conn);
    $mahasiswaController->edit($_GET['id']);
}
elseif ($action === 'update_mahasiswa') {
    require_once 'controller/MahasiswaController.php';
    $mahasiswaController = new MahasiswaController($conn);
    $mahasiswaController->update();
}
elseif ($action === 'hapus_mahasiswa' && isset($_GET['id'])) {
    require_once 'controller/MahasiswaController.php';
    $mahasiswaController = new MahasiswaController($conn);
    $mahasiswaController->delete($_GET['id']);
}
elseif ($action === 'kelas_mahasiswa') {
    require_once 'controller/MahasiswaController.php';
    $mahasiswaController = new MahasiswaController($conn);
    $mahasiswaController->viewKelas(); // Method baru untuk melihat kelas
}
elseif ($action === 'jadwal_mahasiswa') {
    require_once 'controller/MahasiswaController.php';
    $mahasiswaController = new MahasiswaController($conn);
    $mahasiswaController->viewJadwal(); // Method baru untuk melihat jadwal
}
// Tambahkan di dalam index.php Anda
elseif ($action === 'kelas_mahasiswa') {
    require_once 'controller/MahasiswaController.php';
    $mahasiswaController = new MahasiswaController($conn);
    $mahasiswaController->viewKelas(); // Method baru untuk melihat kelas
}
elseif ($action === 'jadwal_mahasiswa') {
    require_once 'controller/MahasiswaController.php';
    $mahasiswaController = new MahasiswaController($conn);
    $mahasiswaController->viewJadwal(); // Method baru untuk melihat jadwal
}
// Titik Akhir Fallback (Default Route)
else {
    require_once 'controller/AuthController.php';
    $authController = new AuthController($conn);
    require_once 'views/login.php'; 
}
?>