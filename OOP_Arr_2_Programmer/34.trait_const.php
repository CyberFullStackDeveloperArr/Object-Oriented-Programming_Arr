<?php  
trait smartElectronic{
    public $internet = "Telkom Indihome";
    const KECEPATAN = "10 mbps";
    public function cekOS(){
        return "android 9.0 (pie)";
    }
}
echo smartElectronic::KECEPATAN;
//error karena trait tdk bisa memiliki konstanta