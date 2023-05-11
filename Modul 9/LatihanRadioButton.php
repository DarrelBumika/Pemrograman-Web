<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Radio Button</title>
    </head>
    <body>
        <h2>Latihan Radio Button</h2>
        <br>

        <h4>Latihan Mendapatkan Nilai Radio Button</h4>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <b>Jenis Kelamin</b>
            <br>
            <input type="radio" name="gander1" value="Pria">Pria
            <input type="radio" name="gander1" value="Wanita">Wanita
            <br>
            <input type="submit" value="OK">
        </form>

        <br>

        <?PHP
            if (isset($_POST['gander1'])) {
                echo $_POST['gander1'];
            }
        ?>

        <h4>Latihan Prefilling Radio Button</h4>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <b>Jenis Kelamin</b>
            <br>
            <input type="radio" name="gander2" value="Pria"
                <?php
                    if ($_POST['gander2'] == "Pria") {
                        echo 'checked = "checked"';
                    }
                ?>
            >Pria
            <input type="radio" name="gander2" value="Wanita"
                <?php
                    if ($_POST['gander2'] == "Wanita") {
                        echo 'checked = "checked"';
                    }
                ?>
            >Wanita
            <br>
            <input type="submit" value="OK">
        </form>

        <br>

        <?php
            if (isset($_POST['gander2'])) {
                echo $_POST['gander2'];
            }
        ?>
    </body>
</html>