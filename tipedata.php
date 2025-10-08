<?php
class car{
    public $color; //properti untuk menyimpan warna mobil!!
    public $model; //properti umtuk menyimpan model mobil
// constructor = fungsi khusus yang otomatis dipanggil saat objek dibuat
    public function __construct($color, $model) {
    $this->color = $color; //$this = merujuk ke objek yang sedang dibuat
    $this->model = $model; //isi properti dengan nilai dari parameter
    }
 //method ( fungsi di dalam class)
    public function message () {
        return " my car is a". $this->color." ".$this->model.".";
// menggabungkan string dengan properti color dan model
}
}
// membuat objek baru dari class car
$mycar = new car ("red","volvo");
// menampilkan detail objek
var_dump($mycar);
?>
