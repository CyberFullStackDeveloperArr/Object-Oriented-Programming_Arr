<?php  
trait smartElectronicC{
    public function cekOS(){
        return "Android 9.0 (pie)";
    }
}

trait LowWatt{
    public function efisiensi(){
        return "konsumsi daya 0.8";
    }
}

class smartTVV{
    use smartElectronicC, LowWatt;
    public function cekinfo(){
        return "smart TV ".$this->cekOS()." - ".$this->efisiensi();
    }
}

$produk01 = new smartTVV;
echo $produk01->cekinfo();
//tidak error