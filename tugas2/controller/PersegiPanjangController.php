<?php
require_once 'Model/PersegiPanjang.php';

class PersegiPanjangController {
    public function index() {
        // 3. Buat object dengan nilai: panjang = 10, lebar = 5
        $persegi = new PersegiPanjang(10, 5);
        
        // Memanggil method untuk mendapatkan hasil
        $luas = $persegi->hitungLuas();
        $keliling = $persegi->hitungKeliling();
        
        // Mengambil nilai properti untuk ditampilkan
        $panjang = $persegi->panjang;
        $lebar = $persegi->lebar;

        // 4. Memanggil View untuk menampilkan hasil
        require_once 'View/hasil_persegipanjang.php';
    }
}
?>