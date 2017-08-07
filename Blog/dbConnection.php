<?php

// DB Connection
try {
    $dsn = 'mysql:host=localhost; dbname=blog';
    $login = 'root';
    $pass = '';
    $dbh = new PDO($dsn, $login, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit($e->getMessage());
}




