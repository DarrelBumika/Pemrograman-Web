<!DOCTYPE html>
<html>
    <head>
        <title>Lihat data</title>
    </head>
    <body>
        <h1>Detail Data</h1>
        <br>
        <br>
        <?php
            include "koneksi.php";

            $nim = $_GET['nim'];
            $datas = mysqli_query($koneksi, "SELECT * from mahasiswa WHERE nim='$nim'") or die(mysqli_error());
            $no = 1;
            while($data = mysqli_fetch_array($datas)){
                ?>
                <table>
                    <tr>
                        <td>NIM</td>
                        <td>: <?php echo $data['nim'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: <?php echo $data['nama'] ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <?php echo $data['alamat'] ?></td>
                    </tr>
                    <tr></tr>
                </table>
                <?php
            }
        ?>
        <a href="full.php"><<<< Kembali</a>
    </body>
</html>