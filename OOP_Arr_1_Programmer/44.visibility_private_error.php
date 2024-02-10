<?php 
class Produk 
{
    private $merek;
    private function hello()
    {
        return "ini adalah Produk";
    }
}
$produk01 = new Produk();
$produk01->merek = "Asus";
echo $produk01->merek;
echo $produk01->hello();
//visibility private adalah level tertutup jika sebuah property atau method di set sbg private yg bisa akses hanya code program saja.