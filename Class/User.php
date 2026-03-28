<?php
class User {
    public $firstname;
    public $lastname;
    public $phone;

    // method yang dijalankan saat object dibuat
    public function __construct($firstname, $lastname, $phone) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
    }

    // method untuk mengambil data
    public function getData() {
        return [
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone' => $this->phone
        ];
    }
}
?>