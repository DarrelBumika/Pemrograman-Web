<!DOCTYPE html>
    <html lang="en" class="h-100">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            <title>Studi Kasus</title>

            <style>
                @font-face {
                    font-family: br hendrix;
                    src: url(font.ttf);
                }
            </style>
        </head>

<?php
    session_start();

    if(isset($_SESSION['login'])) {
?>
        <body class="h-100 d-flex text-center" style="font-family: br hendrix">
            <div class="cover-container d-flex h-100 w-100 mx-auto flex-column">
                <header class="mb-auto">
                    <div class="d-flex justify-content-center">
                        <h4 class="mt-3">Home Page</h4>
                    </div>
                </header>
                <main>
                    <div class="d-flex justify-content-center">
                        <div class="text-start" style="width: 600px; height: 300px;">
                            <p style="font-size: 50px; color: #1dbf73;">Welcome!</p>
                            <p style="font-size: x-large;">
                                Hanya username dan password yang sesuai saja yang dapat mengakses halaman ini.
                                Setelah logout, halaman ini <i style="color: #1dbf73;"> tidak akan bisa diakses lagi. </i>
                            </p>
                            <p class="mt-5"> 
                                Created by <a href="https://www.fiverr.com/ashilpadarrel" style="text-decoration: none; color: #1dbf73;">Ashilpa Darrel</a>
                            </p>
                        </div>
                    </div>
                </main>
                <footer class="mt-auto">
                    <div class="mb-3">
                        <a href="studikasus-logout.php" style="text-decoration: none; color: #1dbf73; font-size: 20px;">Logout</a>
                    </div>
                </footer>
            </div>
        </body>

<?php
    } else {
?>

        <body class="vh-100 d-flex justify-content-center align-items-center" style="font-family: br hendrix">
            <div class="text-center" style="font-size: 20px;">
                <p style="color: #1dbf73; font-size: 60px;">Page is not acessible!</p>
                <a href="studikasus-login.php" style="text-decoration: none; color: #1dbf73;">Login</a> to see this page!
            </div>
        </body>

<?php
    }
?>

</html>