<?php
class car {
    public $color; // properti untuk menyimpan warna mobil
    public $model; // properti untuk menyimpan model mobil
    // contructor = fungsi khusus yang otomatis dipanggil saat objek dibuat
    public function __construct($color,$model) {
        $this->color = $color; //$this = merujuk ke object yang sedang dibuat
        $this->model = $model; // isi properti dengan nilai dari parameter
    }
    // method (fungsi didalam class)
    public function message() {
        return "my car is a". $this->color."".$this->model."";
        // menggabungkan string dengan properti color dengan mobil
    }
    }
    // object baru dari class car
    $myCar = new Car ("red","volvo");
    // menampilkan detail object 
    var_dump($myCar);

    include "1.html";

    $x=


?>