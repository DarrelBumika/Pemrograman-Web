<?php
    session_start();

    if(isset($_SESSION['login'])) {
        echo "<h2> HOME </h2>";
        echo "Selamat datang <b>".$_SESSION['login']."</b>";
        echo "<br>";
        echo "Halaman ini dapat diakses saat berhasil login";

        echo "<br>";
        echo "<a href='HapusSession.php'> logout </a>";
    } else {
        echo "<h2> Anda Belum Login! </h2>";
        echo "login <a href='SetSession.php'> disini </a>";
    }
?>