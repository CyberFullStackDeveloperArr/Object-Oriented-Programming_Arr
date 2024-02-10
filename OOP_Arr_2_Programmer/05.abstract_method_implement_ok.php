<?php 
abstract class Produk {
    abstract public function cekharga();
}

class Televisi extends Produk{
    public function cekharga(){
      return 3000000;
    }
     }

     $produk01 = new Televisi();
     echo $produk01->cekharga();