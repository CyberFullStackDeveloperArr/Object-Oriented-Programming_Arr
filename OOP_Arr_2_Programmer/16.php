<?php  
interface ProdukEkspor {
    public function cekHargaUsd();
    public function cekNegara();

    
}
class Televisi implements ProdukEkspor { // ini saja contoh pada modul
        public function cekHargaUsd(){
            return 111;
        }
        public function cekNegara(){
            return 111;
        }
}