<?php

class Produk
{
  private $judul,
    $penulis,
    $penerbit,
    $diskon = 0,
    $harga;


  public function __construct(
    $judul = "Judul",
    $penulis = "Penulis",
    $penerbit = "Penerbit",
    $harga = 0
  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;

    //echo "Hello World!";
  }

  public function setJudul($judul)
  {
    //if (!is_string($judul)) {
    //throw new Exception("Judul harus string");
    //}
    $this->judul = $judul;
  }

  public function getJudul()
  {
    return $this->judul;
  }

  public function setpenulis($penulis)
  {
    $this->penulis = $penulis;
  }

  public function getpenulis()
  {
    return $this->penulis;
  }

  public function setPenerbit($Penerbit)
  {
    $this->Penerbit = $Penerbit;
  }

  public function getPenerbit()
  {
    return $this->Penerbit;
  }

  public function setHarga($harga)
  {
    $this->harga = $harga;
  }

  //public function setDiskon($diskon)
  //{
  //$this->diskon = $diskon;
  //}

  public function getHarga()
  {
    //return $this->harga;
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getDiskon()
  {
    return $this->diskon;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
    return $str;
  }
}

class Komik extends Produk
{
  public $jmlHalaman;

  public function __construct(
    $judul = "Judul",
    $penulis = "Penulis",
    $penerbit = "Penerbit",
    $harga = 0,
    $jmlHalaman = 0
  ) {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk()
  {
    $str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public $waktuMain;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga", $waktuMain)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktuMain = $waktuMain;
  }
  public function getInfoProduk()
  {
    $str = "Game: " .  parent::getInfoProduk() . "~ {$this->waktuMain} Jam.";
    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 50000, 100);


$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 5000000, 50);


//$produk3 = new Produk("Dragon Ball");


//echo "Komik : " . $produk1->getLabel();
//echo "<br>";
//echo "Game : " . $produk2->getLabel();
//echo "<br>";
//var_dump($produk3);

//echo "<br>";

//$infoProduk1 = new cetakInfoProduk();
//echo $infoProduk1->cetak($produk1);



echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
//$produk2->diskon = 90;
echo $produk2->getHarga();
echo "<hr>";

//$produk1->judul = ("JudulBaru");
//$produk1->setJudul("JudulBaru");

echo $produk1->getJudul();
echo "<br>";
$produk1->setpenulis("Olive Belgia");
echo $produk1->getpenulis();
