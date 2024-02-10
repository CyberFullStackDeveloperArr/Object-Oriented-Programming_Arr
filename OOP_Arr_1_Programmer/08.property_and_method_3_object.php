<?php
class Produk 
{
    public $sku = "000";
    public $merek = "";
    public $harga = 0;

    public function pesanProduk()
    {
        return "produk dipesan......";
    }
}
$televisi = new Produk();
$televisi->sku = "001";
$televisi->merek = "Samsung";
$televisi->harga = 20000000;

$mesincuci = new Produk();
$mesincuci->sku = "002";
$mesincuci->merek = "LG";
$mesincuci->harga = 1500000;

$speaker = new Produk();
$speaker->sku = "003";
$speaker->merek = "ediefier";
$speaker->harga = "950000";

print_r($televisi) . PHP_EOL;
print_r($mesincuci) . PHP_EOL;
print_r($speaker);
