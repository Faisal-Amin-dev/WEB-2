<?php
// Lokasi berkas: controller/DashboardController.php

class DashboardController {
    
    public function __construct() {
        // Validasi eksistensi sesi pengguna
        if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
            header("Location: index.php?action=index");
            exit();
        }
    }

    public function index() {
        // Evaluasi peran pengguna untuk menentukan antarmuka yang dirender
        $role = $_SESSION['role'];

        if ($role === 'admin') {
            require_once 'views/dashboard_admin.php';
        } elseif ($role === 'mahasiswa') {
            require_once 'views/dashboard_mahasiswa.php';
        } else {
            // Penanganan jika peran tidak terdefinisi dalam sistem
            echo "Akses Ditolak: Peran pengguna tidak valid.";
            exit();
        }
    }
}
?>