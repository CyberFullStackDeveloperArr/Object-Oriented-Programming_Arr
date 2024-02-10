<?php  //Interface juga bisa diturunkan ke dalam interface lain.
interface ProdukEkspor {
    public function cekHargaUsd();
    public function cekNegara();
}
interface ProdukMakanan{
    public function cekExpride();
}

interface ProdukMakananBeku extends ProdukMakanan {
    public function cekSuhuMin();
}

class Nugget implements ProdukEkspor, ProdukMakananBeku {
    public function cekHargaUsd(){
        return 7.5;
    }

    public function cekNegara(){
        return ["Singapura", "Malaysia", "Thailand"];
    }

    public function cekExpride(){//gk ada ini error, nambahin sendiri
        return ["gosong"];
    }

    public function CeksuhuMin(){
        return -14;
    }
}
//tdk output karna tdk ada di bawah ini