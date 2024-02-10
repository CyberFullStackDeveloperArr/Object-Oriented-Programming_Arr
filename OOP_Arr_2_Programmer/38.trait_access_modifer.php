<?php 
trait smartElectronic{
    public function cekOS(){
        return "Android 9.0(pie)";
    }
}

class SmartTV{
    use smartElectronic {cekOS as protected; }
}

$produk01 = new SmartTV;
echo $produk01->cekOS();