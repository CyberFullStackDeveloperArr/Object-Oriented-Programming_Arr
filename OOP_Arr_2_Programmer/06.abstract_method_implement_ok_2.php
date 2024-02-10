<?php
abstract class Produk {
    abstract public function cekharga();
}

class Televisi extends Produk {
  public function cekharga(){
    return 3000000;
  }
}

class MesinCuci extends Produk {
    public function cekharga(){
        return 1500000;
    }
}

$produk01 = new Televisi();
echo $produk01->cekharga();

echo "<br>";

$produk01 = new MesinCuci();
echo $produk01->cekharga();