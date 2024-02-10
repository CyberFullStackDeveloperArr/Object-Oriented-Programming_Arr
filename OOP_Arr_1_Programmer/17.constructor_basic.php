<?php 
use Produk as GlobalProduk;

class Produk
{
    public function __construct()
    {
        echo "Construct dijalankan..." . PHP_EOL;
    }
}
$produk01 = new produk();
$produk01 = new produk();