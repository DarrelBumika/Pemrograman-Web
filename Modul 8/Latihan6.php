<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Latihan Fungsi & Prosedur</title>
    </head>
    <body>
        <?php 
            // prosedur
            function tulis() {
                echo "Pemanggilan prosedur tulis";
            }

            tulis();

            echo "<br>";

            // fungsi
            function tambah($a, $b) {
                return ($a + $b);
            }

            echo tambah(3, 6);

            echo "<br>";

            //argumen
            function tulis_tebal($kata, $tebal = true) {
                echo $tebal ? "<b>".$kata."</b>" : $kata;
            }

            tulis_tebal("argumen");
            echo "<br>";
            tulis_tebal("argumen", false);
        ?>
    </body>
</html>