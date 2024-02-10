<?php
class Produk 
{
    public $sku = "001";
    public $merk = "Samsung";
    public $harga = "4000000";

    public function pesanProduk()
    {
        return "Produk dipesan.....";
    }
}
$mesincuci = new Produk();
$mesincuci->sku = "002";
$meincuci->merek = "LG";
$mesincuci->harga = 1500000;

echo $mesincuci->sku . PHP_EOL;
echo $mesincuci->merek . PHP_EOL;
echo $mesincuci->harga;
