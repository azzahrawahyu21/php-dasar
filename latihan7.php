<?php

$namaBuah = array ("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
echo "saya suka" . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".";

// tampilkan Mangga
echo "saya suka" . $namaBuah[1];
// tampilkan Jeruk
echo "saya suka" . $namaBuah[2];
// tampilkan Apel
echo "saya suka" . $namaBuah[3];
// tampilkan Melon
echo "saya suka" . $namaBuah[4];

//array dengan spesifik index
$umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"39 Tahun");
$umur['ahmad']="50 Tahun";
echo "Umur andi adalah " . $umur['andi'];
// tampilkan semua umur
echo "Umur Andi = " . $umur[0] . ", umur Ben = " . $umur[1] . ", umur Joe = " . $umur[2] . ", umur ahmad = " . $umur[4] . "."; 

?>