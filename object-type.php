<?php

class Produk
{

  public  $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "peenrbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    //echo "Hello World!";
  }


  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
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


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 50000);


$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 5000000);

//$produk3 = new Produk("Dragon Ball");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
//echo "<br>";
//var_dump($produk3);

echo "<br>";

$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);
