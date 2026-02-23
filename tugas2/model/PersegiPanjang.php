<?php
class PersegiPanjang {
    // 1. Memiliki properti
    public $panjang;
    public $lebar;

    // Constructor untuk inisialisasi nilai awal
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // 2. Memiliki method hitungLuas()
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    // 2. Memiliki method hitungKeliling()
    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>