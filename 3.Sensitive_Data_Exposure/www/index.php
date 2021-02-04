<?php
session_start();

if ($_SESSION['logged'] != 1) {
    header('Location: login.php');
    die();


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
        }else {
            echo' <p style="text-align:center;padding-top:25%;font-size:1.5em;font-weight:bold;">Flag{S3nS1t1v3_D4tA}<p>';
        }
    ?>
</body>
</html>
