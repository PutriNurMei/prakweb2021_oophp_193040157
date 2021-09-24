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
    $waktuMain = 0,
    $tipe
  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
    //echo "Hello World!";
  }


  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap()
  {
    $str = "{$this->tipe} : {$this->judul} | {$this->penulis}, {$this->getLabel()} (Rp. {$this->harga})";
    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else if ($this->tipe == "Game") {
      $str .= " ~ {$this->waktuMain} Jam.";
    }

    return $str;
  }
}

class cetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 50000, 100, 0, "Komik");


$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 5000000, 0, 50, "Game");

//$produk3 = new Produk("Dragon Ball");


//echo "Komik : " . $produk1->getLabel();
//echo "<br>";
//echo "Game : " . $produk2->getLabel();
//echo "<br>";
//var_dump($produk3);

//echo "<br>";

//$infoProduk1 = new cetakInfoProduk();
//echo $infoProduk1->cetak($produk1);



echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
