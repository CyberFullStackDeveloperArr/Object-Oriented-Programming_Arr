<?php   
abstract class Produk {
    abstract public function cekharga($jumlah);
}

class Televisi extends Produk{
    public function cekharga($jumlah){
        return 3000000 * $jumlah;
    }
}

$produk01 = new Televisi();
echo $produk01->cekharga(2);