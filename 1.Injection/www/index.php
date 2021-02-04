<?php
session_start();
if(!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header ("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1ject10n</title>
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
    <?= '<p class="flag">Flag{1ject10n}<p>'; session_destroy();?>
</body>
</html>

