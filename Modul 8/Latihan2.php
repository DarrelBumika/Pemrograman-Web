<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Latihan Variabel</title>
    </head>
    <body>
        <?php
            $angka = 3;
            $var = null;

            echo "hasil dari var_dump(\$angka) : ";
            var_dump($angka);

            echo "<br>";

            echo "hasil dari print_r(\$angka) : ";
            print_r($angka);

            echo "<br>";

            echo "hasil dari var_dump(isset(\$angka)) : ";
            var_dump(isset($angka));

            echo "<br>";

            echo "hasil dari var_dump(isset(\$var)) : ";
            var_dump(isset($var));
        ?>
    </body>
</html>