<?php  
class Produk 
{
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($jenis, $merek, $stok)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
}

class Televisi extends Produk 
{
    public function __construct()
    {
    }
}

$produk01 = new Televisi("Televisi", "Samsung", 20);
print_r($produk01);