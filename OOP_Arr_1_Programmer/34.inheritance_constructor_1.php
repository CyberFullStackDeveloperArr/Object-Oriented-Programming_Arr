<?php  
class Produk 
{
    public $jenis;
    public $mrek;
    public $stok;


    public function __construct($jenis, $mrek, $stok)
    {
        $this->jenis = $jenis;
        $this->mrek = $mrek;
        $this->stok = $stok;
    }
}

$produk01 = new Produk("Televisi", "Samsung", 20);

print_r($produk01);