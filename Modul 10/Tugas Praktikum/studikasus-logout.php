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
        if(isset($_SESSION['login'])){
            unset($_SESSION);
            session_destroy();
?>

        <body class="vh-100 d-flex justify-content-center align-items-center" style="font-family: br hendrix">
            <div class="text-center justify-content-center" style="font-size: 20px;">
                <p style="color: #1dbf73; font-size: 60px;">Good Bye!</p>
                <div>
                    <a href="studikasus-home.php" style="text-decoration: none; color: #1dbf73;">Home page</a> now is not acessible, or 
                    <a href="studikasus-login.php" style="text-decoration: none; color: #1dbf73;">Login again!</a>
                </div>
            </div>
        </body>

<?php
        }
?>