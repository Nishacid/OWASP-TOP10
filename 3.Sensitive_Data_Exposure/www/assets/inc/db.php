<?php

try {
    $db = new PDO('mysql:host=db;dbname=owasp3', 'root', 'YoursuperPassword');
} catch (Exception $e) {
    echo 'Error : ' . $e->getMessage();
    die();
}

?>
