<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Pengulangan</title>
    </head>
    <body>
        <?php
            //while
            $i = 0;
            
            while($i < 10) {
                echo "$i ";

                $i++;
            }

            echo "<br>";

            //do while
            $i = 0;

            do {
                echo "$i ";

                $i++;
            } while ($i < 10);

            echo "<br>";

            //for
            for($i = 0; $i < 10; $i++) {
                echo "$i ";
            }

            echo "<br>";
            
            //foreach
            $array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
            foreach($array as $nilai) {
                echo "$nilai ";
            }
        ?>
    </body>
</html>