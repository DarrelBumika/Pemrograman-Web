<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Latihan Input Data</title>
    </head>
    <body>
        <h2>Latihan Input Data</h2>
        <br>

        <p>Latihan Get</p>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
            Nama : 
            <input type="text" name="namaGet">
            <br>
            <input type="submit" value="OK">
        </form>
        <br>

        <?php
            if (isset($_GET['namaGet'])) {
                echo "Halo, " .$_GET['namaGet'];
            }
        ?>

        <br>
        <br>

        <p>Latihan Post</p>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            Nama : 
            <input type="text" name="namaPost">
            <br>
            <input type="submit" value="OK">
        </form>
        <br>

        <?php
            if (isset($_POST['namaPost'])) {
                echo "Halo, " .$_POST['namaPost'];
            }
        ?>

        <br>
        <br>

        <p>Latihan Request</p>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
            Nama : 
            <input type="text" name="namaRequest">
            <br>
            <input type="submit" value="OK">
        </form>
        <br>

        <?php
            if (isset($_REQUEST['namaRequest'])) {
                echo "Halo, " .$_GET['namaRequest'];
                echo "<br>";
                echo "Menggunakan metode " . $_SERVER['REQUEST_METHOD'];
            }
        ?>
    </body>
</html>