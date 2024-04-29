<?php
// Gaji pokok dan tunjangan
$gaji_pokok = 3250000;
$tunjangan_jabatan = 1200000;

// Menghitung gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan_jabatan;

// Menghitung pajak (10% dari gaji kotor)
$pajak = 0.1 * $gaji_kotor;

// Menghitung gaji bersih
$gaji_bersih = $gaji_kotor - $pajak;

// Menampilkan hasil
echo "Gaji bersih yang diterima Obi setiap bulan adalah Rp. " . number_format($gaji_bersih, 0, ',', '.');
?>
