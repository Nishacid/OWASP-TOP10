<?php
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] == 1) { 
    if ($_COOKIE['Type'] === 'admin') {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super-Secure Admin</title>
    <style>
        .flag{
            text-align:center;
            font-weight: bold;
            padding-top: 25%;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <?php 
        echo '<p class="flag">You got me ! <br>Flag{Br0k3n_0th}</p>';
    }else {
        echo '<p style="text-align:center;padding-top:25%;font-size:1.5em;font-weight:bold;">
        Welcome to my Super-Secure-Admin-Panel !<br>
        Even if you have been able to find my account, you will never find a way to get into my SSAP <small style="font-size:0.5em!important;">(Super-Secure-Admin-Panel)</small> !!
        </p>';
    }
    }else {
        header('Location: login.php');
        die();
    } 
?>
</body>
</html>


