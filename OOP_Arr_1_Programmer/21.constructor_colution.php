<?php 
class Produk
{
    public $jenis;
    public $merek;
    public $stok;
    
    public function __construct($a, $b, $c)
    {
        $this->jenis = $a;
        $this->merek = $b;
        $this->stok = $a;
        echo "constructor dijalankan....." . PHP_EOL;
    }
}
$produk01 = new Produk("Televisi", "Samsung", 20);

$produk02 = new Produk("Mesin Cuci", "LG", 10);

print_r($produk01) . PHP_EOL;
print_r($produk02);
//contoh tugas yang di slit ppt construtor mobi + dijalankan..