<?php 
abstract class Produk {
    abstract public function cekharga($jumlah);
}

class Televisi extends Produk{
    public function cekharga(){
        return 3000000;
    }
}

$produk01 = new Televisi();