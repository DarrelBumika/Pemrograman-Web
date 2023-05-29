<?php
    include "koneksi.php";

    $nim = $_GET['nim'];
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];

    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUE ('', '$nim', '$nama', '$alamat')");
    header("location:full.php? pesan=update");
?>