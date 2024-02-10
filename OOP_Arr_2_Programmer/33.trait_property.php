<?php  
trait smartElectronic {
    public $internet = "Telkom indijoy";
    public function cekOS(){
        return "Android 9.0 (pie)";
    }
}

class smartTV{
    use smartElectronic;
}

$produk01 = new smartTV;
echo $produk01->internet;
echo "<br>";
echo $produk01->cekOS();