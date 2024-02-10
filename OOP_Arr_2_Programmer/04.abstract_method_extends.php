<?php 
abstract class Produk {
  abstract public function cekharga();
}

class Televisi extends Produk {
  public function cekharga() { //jika tdk ada ini error 

  }
}

$produk01 = new Televisi();
//error karena televisi harus impelemntasi dari menthod