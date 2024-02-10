<?php  
abstract class Produk {
    abstract public function cekharga();
}

class Televisi extends Produk{
    protected function cekharga(){
        return 3000000;
    }
}
$produk01 = new Televisi();