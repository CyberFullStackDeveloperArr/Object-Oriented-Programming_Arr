<?php 
class smartElectronicc {
    public function efisiensi(){
        return "konsumsi daya 1.1"; 
    }
}

trait LowWat{
    public function efisiensi(){
        return "konsumsi daya 0.8";
    }
}

class smartTV{
    use smartElectronicc, LowWat;
}
$produk01 = new smartTV;
echo $produk01->efisiensi();//bingug error karena gk tau mana yg harus di ambil 