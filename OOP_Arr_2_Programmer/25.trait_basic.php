<?php  
class Televisi {
    public function cekResolusi(){
        return "Full HD";
    }
}

trait SmartElectronic {
    public function cekOS(){
        return "Android 9.0 (pie)";
    }
}

class smartTV extends Televisi{
    use SmartElectronic;
    public function cekinfo(){
        return "smartTV ".$this->cekResolusi()." - ".$this->cekOS();
    }
}

$produk01 = new smartTV;
echo $produk01->cekinfo();