<?php

// define('NAMA', 'Olive Belgia');

// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;



// class Coba
// {
//   // define('NAMA', 'Olive')
//   const NAMA = 'Olive';
// }

// echo Coba::NAMA;



// echo __LINE__;
// echo "<br>";
// echo __FILE__;


// function coba()
// {
//   return __FUNCTION__;
// }

// echo coba();


class coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
