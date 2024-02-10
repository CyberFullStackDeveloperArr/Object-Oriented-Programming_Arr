<?php 
trait smartElectroni{
    public function cekOS(){
        return "android 9.0(pie)";
    }
    abstract public function cekProcessor();
}
class smartTV{
    use smartElectronic;
}
//Error di atas terjadi karena saya tidak mengimplementasikan ulang abstract method
//cekProcessor() di dalam class SmartTV
