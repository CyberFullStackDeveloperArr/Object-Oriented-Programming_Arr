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
    public $ukuranLayar;
    public function __construct($jenis, $merek, $stok, $ukuranLayar)
    {
        parent::__construct($jenis, $merek, $stok);
        $this->ukuranLayar = $ukuranLayar;
    }
}

$produk01 = new Televisi("Televii", "Samsung", 20, 32);
print_r($produk01);