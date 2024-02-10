<?php  
class Produk {
  protected $nama;
  protected $harga;
  protected $deskripsi;

  public function __construct($nama, $harga, $deskripsi) {
    $this->nama = $nama;
    $this->harga = $harga;
    $this->deskripsi = $deskripsi;
  }

  public function getNama() {
    return $this->nama;
  }

  public function getHarga() {
    return $this->harga;
  }

  public function getDeskripsi() {
    return $this->deskripsi;
  }
}

class ProdukElektronik extends Produk {
  private $merk;

  public function __construct($nama, $harga, $deskripsi, $merk) {
    parent::__construct($nama, $harga, $deskripsi);
    $this->merk = $merk;
  }

  public function getMerk() {
    return $this->merk;
  }

  public function setMerk($merk) {
    $this->merk = $merk;
  }
  
  public function getInfoProduk() {
    $info = "Produk elektronik: " . $this->getNama() . ", " . $this->getHarga() . ", " . $this->getDeskripsi() . ", " . $this->getMerk();
    return $info;
  }
}

class ProdukMakanan extends Produk {
  private $jenis;

  public function __construct($nama, $harga, $deskripsi, $jenis) {
    parent::__construct($nama, $harga, $deskripsi);
    $this->jenis = $jenis;
  }

  public function getJenis() {
    return $this->jenis;
  }

  public function setJenis($jenis) {
    $this->jenis = $jenis;
  }
  
  public function getInfoProduk() {
    $info = "Produk makanan: " . $this->getNama() . ", " . $this->getHarga() . ", " . $this->getDeskripsi() . ", " . $this->getJenis();
    return $info;
  }
}

$produkElektronik = new ProdukElektronik("Smartphone", 5000000, "Spesifikasi lengkap...", "Samsung");
echo $produkElektronik->getInfoProduk(); // Output: Produk elektronik: Smartphone, 5000000, Spesifikasi lengkap..., Samsung

$produkMakanan = new ProdukMakanan("Kue", 5000, "Rasa enak...", "Kue basah");
echo $produkMakanan->getInfoProduk(); // Output: Produk makanan: Kue, 5000, Rasa enak..., Kue basah