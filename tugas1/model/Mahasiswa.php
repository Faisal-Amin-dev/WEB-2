<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampildata() {
        return [
            'nama' => $this->nama,
            'nim' => $this->nim,
            'jurusan' => $this->jurusan
        ];
    }
}
?>