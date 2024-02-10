<?php  
trait smartElectronic {
    public static $internet = "telkom Pecoro";
    public static function cekOS(){
        return "android 9.0 (pie)";
    }
}
echo smartElectronic::$internet;
echo "<br>";
echo smartElectronic::cekOS();