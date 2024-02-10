<?php  
class Produk{
    public function hello(){
        return "ini adalah produk";
    }
}

class Televisi extends Produk {
    public function hello(){
        return "ini adalah televisi";
    }


   public function helloProduk(){
      return parent::hello();
   }
}

$produk01 = new Televisi();
echo $produk01->helloProduk();