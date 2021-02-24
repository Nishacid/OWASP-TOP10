<?php
session_start();

if ($_SESSION['logged'] != 1) {
    header('Location: login.php');
    die();
}

if (isset($_SESSION['username'])) {
    $username_login = $_SESSION['username'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OWASP TOP10</title>
</head>
<body>
    <?php

        if (isset($_SESSION['username']) && $username_login == 'admin') {
            echo' <p style="text-align:center;padding-top:25%;font-size:1.5em;font-weight:bold;">Hello admin ! <br>Flag{br0k3N_4uTh}<p>';
        }else {
            echo' <p style="text-align:center;padding-top:25%;font-size:1.5em;font-weight:bold;">Hello ' . htmlspecialchars($_SESSION['username']) . '!<p>';
        }
    ?>
    <div class="footer">
        <span><a href="logout.php" style="text-decoration:none;font-size:1.3em;color:red;padding-left:47%;font-weight:bold;">Logout</a></span>
    </div>
</body>
</html>
