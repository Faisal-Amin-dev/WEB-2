<?php
// Lokasi: models/TugasModel.php

class TugasModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllTugas() {
        $query = "SELECT * FROM tugas ORDER BY id DESC";
        $result = mysqli_query($this->conn, $query);
        
        $data = [];
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function tambahTugas($judul, $deskripsi, $deadline) {
        $query = "INSERT INTO tugas (judul, deskripsi, deadline) VALUES ('$judul', '$deskripsi', '$deadline')";
        return mysqli_query($this->conn, $query);
    }
    
    public function getTugasById($id) {
        $query = "SELECT * FROM tugas WHERE id = '$id'";
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateTugas($id, $judul, $deskripsi, $deadline) {
        $query = "UPDATE tugas SET judul='$judul', deskripsi='$deskripsi', deadline='$deadline' WHERE id='$id'";
        return mysqli_query($this->conn, $query);
    }

    public function deleteTugas($id) {
        $query = "DELETE FROM tugas WHERE id='$id'";
        return mysqli_query($this->conn, $query);
    }
    
}
?>