<?php 
trait SmartElectronic{
    public function efisiensi(){
        return "konsumsi daya 1.1";
    }
}

trait LowWatt{
    public function efisiensi(){
        return "konsumsi daya 0.8";
    }
}

class smartTV{
    use SmartElectronic, LowWatt{
        SmartElectronic::efisiensi insteadof LowWatt;
    }
}
$produk01 = new smartTV;
echo $produk01->efisiensi();