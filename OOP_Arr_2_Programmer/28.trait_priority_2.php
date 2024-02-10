<?php 
class Televisiku {
    public function efisiensi(){
        return "konsumsi daya 1.0";
    }
}

trait LowWat {
    public function efisiensi(){
        return "konsumsi daya 0.8";
    }
}

class smartTVku extends Televisiku {
    use LowWat;

    public function efisiensi(){
        return "konsumsi daya 0.9";
    }
}
$produk01 = new smartTVku;
echo $produk01->efisiensi();//method smartv yg di proses

