<?php  
trait smartElectronicka {
    public function cekOP(){
        return "hanpone 9.0 (piu)";
    }
    abstract public function cekProcessor();
}
class smartTVD{
    use smartElectronicka;
    public function cekProcessor(){
        return "snapdragon 845";
    }
}
$produk01 = new smartTVD;
echo $produk01->cekOP();
echo "<br>";
echo $produk01->cekProcessor();