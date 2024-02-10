<?php 
interface ProdukEkspor {
    public function cekHargaUsd();
    public function cekNegara();
    public const biayaPajak = 0.5;
}
echo ProdukEkspor::biayaPajak; //scope resolution ::