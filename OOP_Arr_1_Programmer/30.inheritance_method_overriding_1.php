<?php 
class Produk {
    public  function hello(){
        return "ini dari produk";
    }
}

class televisi extends Produk{
    public function hello(){
        return "ini dari televisi";
    }
}

class radio extends Produk{
    public function hello(){
        return "ini dari radio";
    }
}

$produk01 = new radio();
$produk02 = new televisi();
echo $produk01->hello() . PHP_EOL;
echo $produk02->hello();
