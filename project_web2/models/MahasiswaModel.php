<?php
// Lokasi: models/MahasiswaModel.php

class MahasiswaModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Mengambil semua data mahasiswa
    public function getAllMahasiswa() {
        $query = "SELECT * FROM mahasiswa ORDER BY id DESC";
        $result = mysqli_query($this->conn, $query);
        
        $data = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data; // Akan mengembalikan array kosong jika tidak ada data
    }

    // Menyimpan data mahasiswa baru
    public function tambahMahasiswa($nim, $nama, $email) {
        $query = "INSERT INTO mahasiswa (nim, nama, email) VALUES ('$nim', '$nama', '$email')";
        return mysqli_query($this->conn, $query);
    }
    public function getMahasiswaById($id) {
        $query = "SELECT * FROM mahasiswa WHERE id = '$id'";
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_assoc($result);
    }

    // Eksekusi mutasi data atributikal entitas mahasiswa
    public function updateMahasiswa($id, $nim, $nama, $email) {
        $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', email='$email' WHERE id='$id'";
        return mysqli_query($this->conn, $query);
    }

    // Eksekusi eliminasi rekaman data mahasiswa dari basis data
    public function deleteMahasiswa($id) {
        $query = "DELETE FROM mahasiswa WHERE id='$id'";
        return mysqli_query($this->conn, $query);
    }
}
?>