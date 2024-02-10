<?php 
trait smartElectronic {
    public function efisiensi(){
        return "konsumsi daya 1.1";
    }
}

trait LowWatt{
    public function efisiensi(){
        return "konsumsi daya 0.8";
    }
}

class smartTV {
    use smartElectronic, LowWatt{
        smartElectronic::efisiensi insteadof LowWatt;
        LowWatt::efisiensi as efisiensiLow;
    }
}
$produk01 = new smartTV;
echo $produk01->efisiensi();
echo "<br>";
echo $produk01->efisiensiLow();
//PHP mengizinkan kita untuk memberi nama baru atau nama alias untuk method tersebut