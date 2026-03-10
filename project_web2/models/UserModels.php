<?php

class UserModel {
    // Properti private, hanya bisa diakses di dalam class ini
    private $db;

    // Constructor untuk menerima koneksi database
    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    // Method public untuk mengecek user ke database
    public function checkLogin($username, $password) {
        // Mencegah SQL Injection dengan Prepared Statement
        $query = "SELECT * FROM users WHERE username = ? LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Catatan: Di project nyata, gunakan password_verify() jika password di-hash.
            // Untuk contoh ini menggunakan pencocokan string biasa.
            if ($password === $user['password']) {
                return $user; // Mengembalikan data user jika valid
            }
        }
        return false; // Mengembalikan false jika gagal
    }
}
?>