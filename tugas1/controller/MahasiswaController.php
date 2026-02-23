<?php
require_once 'Model/Mahasiswa.php';

class MahasiswaController {
    public function index() {
        // Membuat 1 object sesuai soal
        $mahasiswa1 = new Mahasiswa("Andi", "12345", "Teknik Informatika");
        
        // Memanggil method tampildata()
        $data = $mahasiswa1->tampildata();

        // Mengirim data ke View
        require_once 'View/hasil_mahasiswa.php';
    }
}
?>