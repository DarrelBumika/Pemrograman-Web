<!DOCTYPE html>
<html lang="en">
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
    <body class="vh-100 d-flex justify-content-center align-items-center" style="font-family: br hendrix">
        <div class="rounded-3 shadow-lg" style="width: 400px; height: 600px">
            <section class="d-flex justify-content-center" style="height: 540px">
                <div style="width: 330px; height: 300px">
                    <div>
                        <div class="text-center" style="height: 120px; padding-block: 35px">
                            <b style="font-size: 150%;">Sign In To Fiverr</b>
                        </div>
                        <div>
                            <button class="rounded-2 mb-1 p-1 border-0 text-light fw-bold d-flex w-100" style="background-color: #4267b2; height: 40px;">
                                <img class="p-1 ms-2" src="fb.png" alt="logo faceboook" style="width: 30px; height: 30px">
                                <div class="d-flex align-items-center" style="width: 280px; height: 30px; margin-left: 30px;">
                                    Continue with Facebook
                                </div>
                            </button>
                            <button class="rounded-2 mt-2 mb-1 p-1 w-100 d-flex" style="background-color: white; border:1px solid #e4e5e7; height: 40px;">
                                <img class="p-1 ms-2" src="google.png" alt="logo google" style="width: 30px; height: 30px">
                                <div class="d-flex align-items-center" style="width: 280px; height: 30px; margin-left: 42px;">
                                    Continue with Google
                                </div>
                            </button>
                            <button class="rounded-2 mt-2 mb-1 p-1 w-100 d-flex" style="background-color: white; border:1px solid #e4e5e7; height: 40px;">
                                <img class="p-1 ms-2" src="apple.png" alt="logo google" style="width: 30px; height: 30px">
                                <div class="d-flex align-items-center" style="width: 280px; height: 30px; margin-left: 47px;">
                                    Continue with Apple
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex mt-2">
                        <hr style="width: 155px; opacity: 10%;">
                        <p class="text-center pt-1" style="width: 40px;">OR</p>
                        <hr style="width: 155px; opacity: 10%;">
                    </div>
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="get" name="form">
                        <div>
                            <input class="w-100 mb-1 p-3 rounded-2" type="text" name="username" placeholder="Username" style="height: 40px; border: 1px solid #e4e5e7;">
                        </div>
                        <div>
                            <input class="w-100 mb-1 mt-2 p-3 rounded-2" type="password" name="password" placeholder="Password" style="height: 40px; border: 1px solid #e4e5e7;">
                        </div>
                        <input class="w-100 mb-1 mt-2 text-light rounded-2" type="submit" value="Continue" style="height: 40px; background-color: #1dbf73; border: none">
                        <div class="text-center">
                            <?php
                                if(isset($_GET['username']) or isset($_GET['password'])) {
                                    $username = $_GET['username'];
                                    $password = $_GET['password'];

                                    if($username == "" && $password == ""){
                                        echo "Username and password required.";
                                    } else if ($username == "") {
                                        echo "Username required.";
                                    } else if ($password == "") {
                                        echo "Password required.";
                                    } else {
                                        if(!is_string($username) && !is_string($password)){
                                            echo "Username and password must be string.";
                                        } else if (!is_string($username)) {
                                            echo "Username must be string.";
                                        } else if (!is_string($password)) {
                                            echo "Password must be string.";
                                        } else {
                                            echo "Welcome back, ".$username."!";
                                        }
                                    }
                                }
                            ?>
                        </div>
                        <div class="d-flex justify-content-between my-2">
                            <div>
                                <input type="checkbox" name="rememberme" id="rememberme">
                                    Remember Me
                                </input>
                            </div>
                            <div>
                                <a href="https://www.fiverr.com/ashilpadarrel" class="text-decoration-none" style="color: #1dbf73;">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <footer style="height: 60px">
                <hr class="w-100 my-2">
                <div class="d-flex justify-content-center">
                    <p style="margin-right: 5px">Not a member yet?</p>
                    <a href="https://www.fiverr.com/join" class="text-decoration-none" style="color: #1dbf73;">
                        Join now
                    </a>
                </div>
            </footer>
        </div>
    </body>
</html>