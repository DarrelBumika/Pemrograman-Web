<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Latihan Prefilling Text Field</title>
    </head>
    <body>
        <h2>Latihan Prefilling Text Field</h2>
        <br>

        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <b>Nama</b> 
            <input type="text" name="nama"
                value="<?php
                    echo isset($_POST['nama']) ? $_POST['nama'] : '';
                ?>"
            >
            <br>
            <input type="submit" value="OK">
        </form>
        <br>

        <?php 
            if (isset($_POST['nama'])) {
                echo "" . $_POST['nama'];
            }
        ?>
    </body>
</html>