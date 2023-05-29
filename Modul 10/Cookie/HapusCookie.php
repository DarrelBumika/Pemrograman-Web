<?php

    echo "<h3> Halaman Hapus cookie </h3>";
    echo "<br>";

    setcookie("username", "", time()-60);
    setcookie("nama_lengkap", "", time()-60);

    echo "cookie telah dihapus";

    echo "<br>";
    echo "<br>";

    echo "<a href='SetCookie.php'> Set cookie </a>";
    echo "<br>";
    echo "<a href='CekCookie.php'> Cek cookie </a>";
    
?>