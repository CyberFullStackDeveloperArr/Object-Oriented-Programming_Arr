<?php
class Produk
{
    public $sku = "001";
    public $merek = "Samsung";
    public $harga = "4000000";

    public function pesanProduk()
    {
        return "Produk dipesan.....";
    }
}
$televisi = new Produk();
echo $televisi->sku . PHP_EOL;
echo $televisi->merek . PHP_EOL;
echo $televisi->harga;
