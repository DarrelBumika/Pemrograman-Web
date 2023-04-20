<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Tipe Data & Casting</title>
    </head>
    <body>
        <?php
            $angka = 3;
            $string = "123abc";
            
            echo "Hasil dari var_dump(is_int(\$angka) : ";
            var_dump(is_int($angka));

            echo "<br>";

            echo "Hasil dari var_dump(is_string(\$string) : ";
            var_dump(is_string($string));

            echo "<br>";

            echo "Hasil dari var_dump(is_int(\$string) : ";
            var_dump(is_int($string));

            echo "<br>";

            //casting
            $angka_baru = (int) $string;
            echo "Hasil casting string ke int : ";
            var_dump($angka_baru);
        ?>
    </body>
</html>