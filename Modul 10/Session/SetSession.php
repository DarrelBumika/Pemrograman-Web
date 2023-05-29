<?php
    session_start();
    if(isset($_GET["login"])) {

        $username = $_GET['username'];
        $password = $_GET['password'];

        if($username == "admin" and $password = "admin") {
            $_SESSION['login'] = $username;

            echo "<h2> Login sukses </h2>";
            echo "<a href='CekSession.php'> Lanjutkan login </a>";
        }
    } else {
?>
        <html>
            <head>
                <title>Login Page</title>
            </head>
            <body>
                <form action="" method="get">
                    <h2>Login</h2>
                    username: 
                    <input type="text" name="username"><br>
                    password: 
                    <input type="password" name="password"><br>
                    <input type="submit" value="login" name="login">
                </form>
            </body>
        </html>
<?php
    }
?>