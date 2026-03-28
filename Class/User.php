<?php
class User {
    public $nama;
    public $email;

    // method yang dijalankan saat object dibuat
    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    // method untuk mengambil data
    public function getData() {
        return [
            'nama' => $this->nama,
            'email' => $this->email
        ];
    }
}
?>