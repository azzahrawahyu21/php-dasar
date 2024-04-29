<?php
// variabel nama hari dalam php
$senin = "Senin";
$selasa = "Selasa";
$rabu = "Rabu";
$kamis = "Kamis";
$jumat = "Jumat";
$sabtu = "Sabtu";
$minggu = "Minggu";

echo "<p>Hari ini adalah hari $senin</p>";
echo "<p>Besok adalah hari $selasa</p>";
echo "<p>Lusa adalah hari $rabu</p>";
echo "<p>Hari ketiga setelah hari ini adalah hari $kamis</p>";
echo "<p>Hari keempat setelah hari ini adalah hari $jumat</p>";
echo "<p>Setelah hari keempat adalah hari $sabtu</p>";
echo "<p>Setelah hari kelima adalah hari $minggu</p>";

$hari = [
    'Sun' => 'Minggu',
    'Mon' => 'Senin',
    'Tue' => 'Selasa',
    'Wed' => 'Rabu',
    'Thu' => 'Kamis',
    'Fri' => 'Jumat',
    'Sat' => 'Sabtu'
];

// Ambil kode hari ini 
$hariIni = date('D');

// Menampilkan nama hari dalam Bahasa Indonesia berdasarkan kode hari ini
echo "Hari ini adalah hari " . $hari[$hariIni];

?>