<?php  
class Produk {
    private $merek = "Asus";
    private function hello(){
        return "ini adalah Produk";
    }
}
class Laptop extends Produk{
    public function helloLaptop(){
        return $this->hello()." Laptop " .$this->merek;
    }
}
$produk01 = new Laptop();
echo $produk01->helloLaptop();
//error 