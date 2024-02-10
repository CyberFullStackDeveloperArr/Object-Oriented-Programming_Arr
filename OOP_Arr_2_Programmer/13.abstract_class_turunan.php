<?php 
abstract class Produk {
    abstract public function cekharga();
}

abstract class Televisi extends Produk {
    abstract public function cekTipe();
}

class TelevisiLED extends Televisi {
    public function cekharga(){
        return 3000000;
    }
    public function cekTipe(){
        return "TV LED";
    } 
}

$produk01 = new TelevisiLED();
echo $produk01->cekharga();
echo "<br>";
echo $produk01->cekTipe();