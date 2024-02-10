<?php  //Sebuah class juga bisa mengimplementasikan banyak interface sekaligus.
interface ProdukEkspor {
    public function cekHargaUsd();
    public function cekNegara();
}
interface ProdukMakanan {
    public function cekExpride();
}

interface ProdukMakananBeku {
    public function cekSuhuMin();
}

class Nugget implements ProdukEkspor, ProdukMakanan, ProdukMakananBeku {
    public function cekHargaUsd(){
        return 7.5;
    }
    public function cekNegara(){
        return ["Singapura", "Malaysia", "Thailand"];
    }
    public function cekExpride(){
        return "April 2019";
    }
    public function cekSuhuMin(){
        return -14;
    }
}

$produk01 = new Nugget();
echo $produk01->cekHargaUsd();
echo "<br>";
echo implode(", ",$produk01->cekNegara());
echo "<br>";
echo $produk01->cekExpride();
echo "<br>";
echo $produk01->cekSuhuMin();