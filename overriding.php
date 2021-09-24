<?php

class Produk
{

  public  $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain,
    $tipe;

  public function __construct(
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "peenrbit",
    $harga = 0,
    $jmlHalaman = 0,
    $waktuMain = 0
  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    //echo "Hello World!";
  }


  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->tipe} : {$this->judul} | {$this->penulis}, {$this->getLabel()} (Rp. {$this->harga})";

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
    $str = "Game: " .  parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
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


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 50000, 100, 0);


$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 5000000, 0, 50);


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
