<?php  
trait smartElectronic {
    public function cekOS(){
        return "android 9.0(pie)";
    }
}

trait LowWat{
    use smartElectronic;
    public function efisiensi(){
        return $this->cekOS()." konsumsi daya 0.8";
    }
}

class smartTV{
    use LowWat;
}
$produk01 = new smartTV;
echo $produk01->efisiensi();