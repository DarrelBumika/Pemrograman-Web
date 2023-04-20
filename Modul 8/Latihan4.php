<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Latihan Seleksi</title>
    </head>
    <body>
        <?php
            $a = 10;
            $b = 5;

            //if-else
            if($a == $b) {
                echo "a sama dengan b";
            } elseif($a > $b) {
                echo "a lebih besar dari b";
            } else {
                echo "a lebih kecil dari b";
            }

            echo "<br>";

            //switch
            switch($a) {
                case 0:
                    echo "a sama dengan 0";
                    break;
                case 5:
                    echo "a sama dengan 5";
                    break;
                case 10:
                    echo "a sama dengan 10";
                    break;
            }
        ?>
    </body>
</html>