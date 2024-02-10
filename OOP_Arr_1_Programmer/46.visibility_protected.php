<?php  
class Produk 
{
    protected $merek;

    protected function hello()
    {
        return "ini adalah Produk";
    }
}
$produk01 = new Produk();
$produk01->merek = "Asus";
echo $produk01->merek;
echo $produk01->hello();
/*protected ada di posisi tengah (property atau method)kode di luar class tdk bisa aksesmkecuali turunan*/