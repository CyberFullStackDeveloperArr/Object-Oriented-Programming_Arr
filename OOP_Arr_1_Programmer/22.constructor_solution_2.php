<?php 
class Produk 
{
    public $jenis;
    public $merek;
    public $stok;
    
    public function __konstructor($jenis, $merek, $stok)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
}
$produk01 = new Produk("Televisi", "Samsung", 20);

$produk02 = new Produk("Mesin Cuci", "LG", 10);

print_r($produk01) . PHP_EOL;
print_r($produk02);
//kurang benar 