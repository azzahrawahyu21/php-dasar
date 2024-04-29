<!DOCTYPE html>
<html>
    <head>
        <title>Check Odd or Even</title>
    </head>
    <body>
        <?php
        $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

        foreach ($angka as $nilai) {
            echo "Nomor : $nilai ";
            if ($nilai % 2 == 0) {
                echo "Genap";
            } else {
                echo "Ganjil";
            }
            echo "<br>";
        }
        ?>
    </body>
</html>
