<?php
// Lokasi: controller/TugasController.php
require_once 'models/TugasModel.php';

class TugasController {
    private $tugasModel;

    public function __construct($conn) {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?action=index");
            exit();
        }
        $this->tugasModel = new TugasModel($conn);
    }

    public function index() {
        $data_tugas = $this->tugasModel->getAllTugas();
        require_once 'views/data_tugas.php';
    }

    public function create() {
        require_once 'views/tambah_tugas.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $judul = $_POST['judul'];
            $deskripsi = $_POST['deskripsi'];
            $deadline = $_POST['deadline'];

            if ($this->tugasModel->tambahTugas($judul, $deskripsi, $deadline)) {
                header("Location: index.php?action=data_tugas");
                exit();
            } else {
                echo "Gagal melakukan persistensi data tugas.";
            }
        }
    }
    public function edit($id) {
        $tugas = $this->tugasModel->getTugasById($id);
        require_once 'views/edit_tugas.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $judul = $_POST['judul'];
            $deskripsi = $_POST['deskripsi'];
            $deadline = $_POST['deadline'];

        if ($this->tugasModel->updateTugas($id, $judul, $deskripsi, $deadline)) {
            header("Location: index.php?action=data_tugas");
            exit();
        } else {
            echo "Anomali terdeteksi: Gagal memodifikasi entitas tugas.";
        }
    }
}

    public function delete($id) {
        if ($this->tugasModel->deleteTugas($id)) {
            header("Location: index.php?action=data_tugas");
            exit();
    } else {
        echo "Anomali terdeteksi: Gagal mengeliminasi entitas tugas.";
    }
    }    
}
?>