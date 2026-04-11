<?php
// Lokasi: controller/MahasiswaController.php
require_once 'models/MahasiswaModel.php'; 

class MahasiswaController {
    private $mahasiswaModel;

    public function __construct($conn) {
        // Validasi Authentication (Apakah user sudah login?)
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?action=index");
            exit();
        }
        $this->mahasiswaModel = new MahasiswaModel($conn);
    }

    // =========================================================
    // HELPER METHOD: Validasi Otorisasi (Hak Akses)
    // =========================================================
    private function requireRole($role) {
        if ($_SESSION['role'] !== $role) {
            // Jika role tidak sesuai, lemparkan kembali ke dashboard masing-masing
            header("Location: index.php?action=dashboard");
            exit();
        }
    }

    // =========================================================
    // FITUR ADMINISTRATOR (Manajemen Data Mahasiswa)
    // =========================================================

    // Menampilkan halaman tabel data
    public function index() {
        $this->requireRole('admin'); // Hanya admin yang boleh melihat daftar semua mahasiswa
        $data_mahasiswa = $this->mahasiswaModel->getAllMahasiswa();
        require_once 'views/data_mahasiswa.php';
    }

    // Menampilkan form tambah data
    public function create() {
        $this->requireRole('admin');
        require_once 'views/tambah_mahasiswa.php';
    }

    // Memproses data yang dikirim dari form
    public function store() {
        $this->requireRole('admin');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];

            // Simpan ke database melalui model
            if ($this->mahasiswaModel->tambahMahasiswa($nim, $nama, $email)) {
                header("Location: index.php?action=data_mahasiswa");
                exit();
            } else {
                echo "Gagal menambah data!";
            }
        }
    }

    // Fasilitasi antarmuka modifikasi dengan pra-populasi data
    public function edit($id) {
        $this->requireRole('admin');
        $mahasiswa = $this->mahasiswaModel->getMahasiswaById($id);
        require_once 'views/edit_mahasiswa.php';
    }

    // Pemrosesan transmisi data dari formulir modifikasi
    public function update() {
        $this->requireRole('admin');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];

            if ($this->mahasiswaModel->updateMahasiswa($id, $nim, $nama, $email)) {
                header("Location: index.php?action=data_mahasiswa");
                exit();
            } else {
                echo "Anomali terdeteksi: Preservasi modifikasi data mahasiswa gagal dieksekusi.";
            }
        }
    }

    // Pemrosesan instruksi eliminasi entitas
    public function delete($id) {
        $this->requireRole('admin');
        if ($this->mahasiswaModel->deleteMahasiswa($id)) {
            header("Location: index.php?action=data_mahasiswa");
            exit();
        } else {
            echo "Anomali terdeteksi: Eliminasi data mahasiswa gagal dieksekusi.";
        }
    }

    // =========================================================
    // FITUR MAHASISWA (Portal Pribadi Mahasiswa)
    // =========================================================

    // Menampilkan halaman kelas mahasiswa
    public function viewKelas() {
        $this->requireRole('mahasiswa'); // Hanya mahasiswa yang boleh mengakses ini
        
        // Opsional: Anda bisa memanggil model di sini jika perlu data dinamis
        // $dataKelas = $this->mahasiswaModel->getKelasByNIM($_SESSION['username']);
        
        require_once 'views/mahasiswa_kelas.php'; // Pastikan file view ini nanti dibuat
    }

    // Menampilkan halaman jadwal mahasiswa
    public function viewJadwal() {
        $this->requireRole('mahasiswa'); 
        require_once 'views/mahasiswa_jadwal.php'; // Pastikan file view ini nanti dibuat
    }
}
?>