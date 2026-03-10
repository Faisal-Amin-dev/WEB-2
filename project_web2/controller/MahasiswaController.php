<?php
// Lokasi: controller/MahasiswaController.php
require_once 'models/MahasiswaModel.php'; 

class MahasiswaController {
    private $mahasiswaModel;

    public function __construct($conn) {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?action=index");
            exit();
        }
        $this->mahasiswaModel = new MahasiswaModel($conn);
    }

    // Menampilkan halaman tabel data
    public function index() {
        $data_mahasiswa = $this->mahasiswaModel->getAllMahasiswa();
        require_once 'views/data_mahasiswa.php';
    }

    // Menampilkan form tambah data
    public function create() {
        require_once 'views/tambah_mahasiswa.php';
    }

    // Memproses data yang dikirim dari form
    public function store() {
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
        $mahasiswa = $this->mahasiswaModel->getMahasiswaById($id);
        require_once 'views/edit_mahasiswa.php';
    }

    // Pemrosesan transmisi data dari formulir modifikasi
    public function update() {
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
        if ($this->mahasiswaModel->deleteMahasiswa($id)) {
            header("Location: index.php?action=data_mahasiswa");
            exit();
        } else {
            echo "Anomali terdeteksi: Eliminasi data mahasiswa gagal dieksekusi.";
        }
    }
}
?>