<?php
class Pengguna {
    public $nama;
    public $hobi;

    public function __construct($nama, $hobi) {
        $this->nama = $nama;
        $this->hobi = $hobi;
    }

    public function ambilData() {
        return [
            'nama' => $this->nama,
            'hobi' => $this->hobi
        ];
    }
}
?>