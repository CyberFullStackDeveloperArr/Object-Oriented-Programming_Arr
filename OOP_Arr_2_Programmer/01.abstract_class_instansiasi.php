<?php 
abstract class Produk {
// tdk benar
}
$produk01 = new Produk();
/*Saya mencoba melakukan instansiasi class Produk 
ke dalam variabel $produk01. Hasilnya
tampil pesan error "Cannot instantiate abstract class Produk"
Kembali ke pengertiannya, abstract class memang dirancang sebagai "template" untuk class
turunan. Nantinya yang akan kita pakai adalah class turunan, bukan langsung dari abstract
class 
*/