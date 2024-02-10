<?php  
class Produk
{
  final public function hello()
  {
    return "ini dari produk";
  }
}
class Televisi extends Produk
{
     public function hello()
    {
     return "ini dari Televisi";
    }
}
//eror final penurunan nya eror memutuskan overriding dan perununan 