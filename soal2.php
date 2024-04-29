<?php

// Jumlah uang yang akan diambil
$jumlah_uang = 1387500;

// Daftar pecahan uang
$pecahan_uang = array(
    100000 => 0,
    50000 => 0,
    20000 => 0,
    10000 => 0,
    5000 => 0,
    2000 => 0,
    500 => 0
);

// Menghitung banyaknya masing-masing pecahan uang
foreach ($pecahan_uang as $denom => &$jumlah) {
    if ($jumlah_uang >= $denom) {
        $jumlah = intdiv($jumlah_uang, $denom);
        $jumlah_uang -= $denom * $jumlah;
    }
}

// Menampilkan hasil
foreach ($pecahan_uang as $denom => $jumlah) {
    echo "Pecahan Rp. " . number_format($denom, 0, ',', '.') . " sebanyak $jumlah lembar<br>";
}

?>
