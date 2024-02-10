<?php  
interface ProdukEspor{
    public function cekHargaUsd();
    public function cekNegara();
}

class MesinCuci implements ProdukEspor {//error karena tdk implementasikan interface Produkes

}