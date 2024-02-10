<?php  
class Produk{
    public $merek = "Sharp";
    public $stok = 50;

    public function cekStok()
    {
        return "Sisa stok: " . $this->stok;
    }
}
$produk01 = new Produk();
echo $produk->merek . PHP_EOL;
echo $produk01->cekStok();