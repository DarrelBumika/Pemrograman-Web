<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Check Box</title>
    </head>
    <body>
        <h2>Latihan Check Box</h2>
        
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <b>Hobi</b>
            <br>
            <input type="checkbox" name="hobi[]" value="membaca">Membaca
            <input type="checkbox" name="hobi[]" value="olahraga">Olahraga
            <input type="checkbox" name="hobi[]" value="menyanyi">Menyanyi
            <br>

            <input type="submit" value="OK">
        </form>

        <br>

        <?php
            if (isset($_POST['hobi'])) {
                foreach ($_POST['hobi'] as $key => $val) {
                    echo $key . '. ' . $val . '<br>';
                }
            }
        ?>
    </body>
</html>