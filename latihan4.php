<?php

/* Operator logika yang bisa digunakan
* ==    Sama dengan                     $x == $y 
* ===   Identical                       $x === $y
* !=    Tidak sama dengan               $x != $y
* <>    Tidak sama dengan               $x <> $y
* !==   Not identical                   $x !== $y
* >     Lebih besar dari                $x > $y
* <     Kurang dari                     $x < $y
* >=    Lebih besar ata sama dengan     $x >= $y
* <=    Kurang dari atau sama dengan    $x <= $y
* <=>   Spaceship                       $x <=> $y
*/

/*
$t = date("H"); // mendapatkan jam dengan format 1-24
echo "if";
if ($t < 16) {
    echo "Selamat siang!";
}
*/
/*
$t = date("H"); // mendapatkan jam dengan format 1-24
echo "<br> If dan Else <br>";
if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}
*/
$t = date("H"); // mendapatkan jam dengan format 1-24
echo "<br> Nested If <br>";
if ($t < 20) {
    echo "Selamat pagi !";
} elseif ($t < 16 ) {
    echo "Selamat sore !";
} else {
    echo "Selamat malam !";
}

?>