<?php  
class Produk
{
    public $merek = "Sharap";
    public $stok = 50;

    public function cekstok()
    {
        return "Sisa stok: " . $this->stok;
    }
}

class Televisi extends produk
{
}

$produk01 = new Televisi();
echo $produk01->merek . PHP_EOL;
echo $produk01->cekstok();
