<?php 
interface ProdukEskpor {
    private function cekHargaUsd();//kedua ini signature 
    protected function cekNegara(); //harus bersifat public tdk bisa private atau protected

} 


/* Atau kita bisa tidak menulis visibility sama sekali karena itu akan dianggap PHP sebagai
public:
1. <?php
2.  interface ProdukEkspor {
3.  function cekHargaUsd();
4.  function cekNegara();
5. } 
*/
