<?php
    session_start();
        if(isset($_SESSION['login'])){
            unset($_SESSION);
            session_destroy();

            echo "<h2> Berhasil Logout </h2>";
            echo "<br>";
            echo "Anda tidak bisa mengakses halaman <a href='CekSession.php'> HOME </a> lagi";
            echo "<br>";
            echo "Harap <a href='SetSession.php'> Login </a> lagi";
        }
?>