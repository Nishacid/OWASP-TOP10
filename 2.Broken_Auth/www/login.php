<?php
session_start();

if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['logged'] = 1;
            $cookie_admin = 'user';
            setcookie("Type", $cookie_admin);
            header('Location: index.php');
            die();
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>OWASP TOP10</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Nishacid">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <link rel="icon" type="image/png" href="./assets/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">

</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-85 p-b-20">
                <form class="login100-form validate-form" action="" method="POST">
                    <span class="login100-form-title p-b-70">
                        Welcome
                    </span>
                    <span class="login100-form-avatar">
                        <img src="./assets/images/avatar-01.png" alt="OWASP">
                    </span>
                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="submit">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <script src="./assets/js/main.js"></script>
</body>

</html>
