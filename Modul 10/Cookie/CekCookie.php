<?php

    echo "<h3> Halaman cek cookie </h3>";
    echo "<br>";

    if(isset($_COOKIE['username'])) {
        echo "Cookie 'username' ada dangan value: ".$_COOKIE['username'];
    } else {
        echo "Cookie 'username' belum diset atau sudah kadaluarsa";
    }

    echo "<br>";

    if(isset($_COOKIE['nama_lengkap'])) {
        echo "Cookie 'nama_lengkap' ada dangan value: ".$_COOKIE['nama_lengkap'];
    } else {
        echo "Cookie 'nama_lengkap' belum diset atau sudah kadaluarsa";
    }

    echo "<br>";
    echo "<br>";

    echo "<a href='SetCookie.php'> Set cookie </a>";
    echo "<br>";
    echo "<a href='HapusCookie.php'> Hapus cookie </a>";
    
?>