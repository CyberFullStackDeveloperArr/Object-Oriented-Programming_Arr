<?php  
class Produk {
    public $merek;
    public $stok;
}

$produk01 = new produk();
$produk01->merek = "Acer";
$produk01->stok= "10"; 

echo $produk01->merek; //acer
echo "<br>";
echo $produk01->stok; //10