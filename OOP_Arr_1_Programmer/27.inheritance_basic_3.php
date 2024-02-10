<?php 
class Produk 
{
    public $merek = "Sharp";
    public $stok = 50;

    public function cekStok()
    {
        return "Sisa stok: " . $this->stok;
    }
}

class Televisi extends Produk
{
    public $jenis = "Televisi";
    
    public function cekStokTelevisi()
    {
        return $this->jenis . " " . $this->merek . " " . $this->cekstok();
    }
}

$produk01 = new Televisi();
echo $produk01->merek . PHP_EOL;
echo $produk01->cekStokTelevisi();

class TelevisiLCD extends Televisi
{
    public $tipe = "LCD";

    public function cekStokTelevisiLCD()
    {
        return $this->tipe . " " . $this->cekStokTelevisi();
    }
}

$produk01 = new televisiLCD();
echo $produk01->merek . PHP_EOL;
echo $produk01->jenis . PHP_EOL;
echo $produk01->tipe . PHP_EOL;
echo $produk01->cekStokTelevisiLCD();