<?php  
class Produk 
{
    final public function hello()
    {
        return "ini dari Produk";
    }
}

$produk01 = new Produk();
echo $produk01->hello();