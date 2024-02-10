<?php 
class Televisi1{
    public function cekResolusi(){
        return "Full HD";
    }
}

class smartphone1{
    public function cekOS(){
        return "Android 9.0 (pie)";
    }
}

class pintarTV extends Televisi1, smartphone1{
    //Akan tetapi, PHP tidak mendukung multiple inheritance, kode program di atas akan
   //menghasilkan pesan error
   
}