<?php 
class TelevisiA {
    public function efisiensi(){
        return "konsumsi daya 1.0";
    }
}

trait LowWat{
    public function efisiensi(){
        return "konsumsi daya 0.8";
    }
}

class smartTV extends TelevisiA{
    use LowWat;
    
}
$produk01 = new smartTV;
echo $produk01->efisiensi();