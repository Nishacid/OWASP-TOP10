<?php
require('assets/inc/db.php');
session_start();

if (isset($_SESSION['logged'])) {
    header('Location: index.php');
    die;
}

if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

         // Check if username exist
         $req = $db->prepare('SELECT * FROM users WHERE username=?');
         $req->execute(array($username));
         $username_verif = $req->rowCount();
 
         if ($username_verif > 0) {
            header('Location: register.php?error=username');
            exit;
         }

        // password hash
        $pass_hash = md5($password);

        // all okay let's insert 
        $query = $db->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
        $query->execute(array($username, $pass_hash));
        header('Location: login.php?error=success&username='. $username);
        

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
                    <h2 style="text-align:center;font-size:1.7em;font-weight:bold;">Register</h2>
                    <br>
                    <span onclick="document.location.href='login.php'" style="padding-left:40%;");>Login here</span>
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
                            Register
                        </button>
                    </div>
                    <?php 

                        if (isset($_GET['error']) && $_GET['error'] === 'username') {
                            echo '<span class="error">Error : Username already used</span>';
                        } 

                    ?>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    <script src="./assets/js/main.js"></script>
</body>

</html>
