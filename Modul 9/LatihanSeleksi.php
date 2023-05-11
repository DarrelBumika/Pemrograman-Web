<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Seleksi</title>
    </head>
    <body>
        <h2>Latihan Seleksi</h2>

        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <b>Pekerjaan</b>
            <br>
            <select name="job">
                <option value="Pelajar">Pelajar</option>
                <option value="PNS">PNS</option>
                <option value="Swasta">Swasta</option>
            </select>
            <br>

            <input type="submit" value="OK">
        </form>

        <br>

        <?php
            if(isset($_POST['job'])) {
                echo $_POST['job'];
            }
        ?>
    </body>
</html>