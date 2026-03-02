<?php

// ==========================================
// BAGIAN 1 & 2: Class User, Constructor, & Encapsulation
// ==========================================
class User {
    // Properti di-set private agar tidak bisa diakses langsung dari luar class
    private $nama;
    private $email;

    /**
     * Constructor untuk mengisi nilai property saat object dibuat
     */
    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    /**
     * Setter untuk mengupdate property nama
     */
    public function setNama($nama) {
        $this->nama = $nama;
    }

    /**
     * Getter untuk mengambil nilai property nama
     */
    public function getNama() {
        return $this->nama;
    }

    /**
     * Setter untuk mengupdate property email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Getter untuk mengambil nilai property email
     */
    public function getEmail() {
        return $this->email;
    }
}

// ==========================================
// BAGIAN 3: Inheritance (Pewarisan)
// ==========================================

/**
 * Class Mahasiswa mewarisi dari class User
 */
class Mahasiswa extends User {
    private $nim;

    /**
     * Constructor memanggil constructor parent untuk $nama dan $email
     */
    public function __construct($nama, $email, $nim) {
        parent::__construct($nama, $email);
        $this->nim = $nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    /**
     * Perilaku khusus untuk menampilkan detail Mahasiswa
     */
    public function tampilkanData() {
        // Menggunakan getter karena property di parent bersifat private
        return "Role: Mahasiswa | Nama: {$this->getNama()} | Email: {$this->getEmail()} | NIM: {$this->nim}\n";
    }
}

/**
 * Class Dosen mewarisi dari class User
 */
class Dosen extends User {
    private $nidn;

    /**
     * Constructor memanggil constructor parent untuk $nama dan $email
     */
    public function __construct($nama, $email, $nidn) {
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    /**
     * Perilaku khusus untuk menampilkan detail Dosen
     */
    public function tampilkanData() {
        return "Role: Dosen | Nama: {$this->getNama()} | Email: {$this->getEmail()} | NIDN: {$this->nidn}\n";
    }
}

// ==========================================
// IMPLEMENTASI: Membuat Object dan Menampilkan Data
// ==========================================

// Membuat object Mahasiswa dan Dosen menggunakan Constructor
$mahasiswa1 = new Mahasiswa("Faisal Amin", "amin@mahasiswa.polsa.ac.id", "220101001");
$dosen1 = new Dosen("Taufiq Ismail", "Taufiq.i@polsa.ac.id", "0011223344");

// Menampilkan data awal
echo $mahasiswa1->tampilkanData();
echo $dosen1->tampilkanData();

echo "--------------------------------------------------\n";

// Menguji Encapsulation: Mengubah data menggunakan metode Setter
$mahasiswa1->setNama("Faisal Amin, Amd.Kom");
$mahasiswa1->setEmail("amin.alumni@polsa.ac.id");

// Menampilkan data setelah diubah (mengambil dengan metode Getter di dalam fungsi)
echo "Data mahasiswa setelah diubah via Setter:\n";
echo $mahasiswa1->tampilkanData();

?>