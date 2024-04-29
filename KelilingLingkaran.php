<?php
// variabel dalam php
$txt = "keliling lingkaran ";
$pi = 3.14;
$r = 15;
$hasil = $pi * $r * $r;

echo "<p>$txt</p>";
echo "<p>Pi adalah : $pi</p>";
echo "<p>Jari-jarinya adalah : $r cm</p>";
echo "Keliling lingkaran : $hasil cm "; 
echo "Maka " . $txt . "dengan jari-jari " . $r . " cm adalah " . $hasil . " cm";

// PHP konstanta
define("nama_konstanta", "{Azzahra}");
echo "<br>".nama_konstanta;

?>