<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Secure XML Upload">
    <title>OWASP TOP10</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
    <header class="header">
        <img src="images/owasp.png" alt="OWASP logo" class="owasp_logo">
        <h1>Here you can upload your XML file to read</h1>
        <i class="centerdesc"><h4>accepted extensions : .xml</h4></i><br>
    </header>
    <section>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="input-file-container">
                <input class="input-file" name="file" type="file">
                <label tabindex="0" for="file" class="input-file-trigger">Select a file...</label><br>
                <center><input type="submit" class="input-file-trigger" tabindex="0" value="UPLOAD" name="submit"></center><br>
            </div>
        </form>
    </section>
    <!-- Hey John, do you forget to delete the backup in /var/www/backup ? Do it please ! -->
</body>
</html>
