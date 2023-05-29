<?php

    echo "<h3> Halaman set cookie </h3>";
    echo "<br>";

    $value1 = 'ana';
    $value2 = 'ini ana';

    setcookie("username", $value1);
    setcookie("nama_lengkap", $value2, time()+60);

    echo "<a href='CekCookie.php'> Cek cookie </a>";
    echo "<br>";
    echo "<a href='HapusCookie.php'> Hapus cookie </a>";

?>