<?php
include "Controller/atlus.php";
// include "Controller/karakter.php";

use Sega\Atlus;
// use Sega\karakter;

// Deklarasikan objek class
$Atlus = new Atlus;

// Tampilkan hasil kembalian dari method getAll Product menggunakan echo 
echo $Atlus -> getAsset();
echo "\n";
// $karakter = new Karakter;
// echo $karakter;
// echo $assetController -> __toString();
// // Membuat objek dan memanggil method baru



