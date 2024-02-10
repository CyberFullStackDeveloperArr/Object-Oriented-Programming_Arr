<?php  
abstract class Produk {
    private $stok = 200;
    abstract public function cekharga();

    public function cekstok(){
        return $this->stok;
    }
}

class Televisi extends Produk {
    public function cekharga(){
        return 3000000;
    }
}

$produk01 = new Televisi();
echo $produk01->cekharga();
echo "<br>";
echo $produk01->cekstok();