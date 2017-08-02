<?php

include_once 'queries.php';

// Connect to BD
try {
    $dsn = 'mysql:host=localhost; dbname=book_store';
    $login = 'root';
    $pass = '';
    $dbh = new PDO($dsn, $login, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    exit($e->getMessage());
}

//Select Books by Name
if (isset($_GET['searchByName'])) {
    $sth = $dbh->prepare(sqlQueries('searchByName'));
    $sth->bindValue(':name', '%' . $_GET['searchByName'] . '%');

    //Select Books by Author Name
} elseif (isset($_GET['author'])) {
    $sth = $dbh->prepare(sqlQueries('author'));
    $sth->bindValue(':author', $_GET['author']);

//Select Books by Tag Name
} elseif (isset($_GET['tag_name'])) {
    $sth = $dbh->prepare(sqlQueries('tag_name'));
    $sth->bindValue(':tag', $_GET['tag_name']);

//Select All Books
} else {
    $sth = $dbh->prepare(sqlQueries('all'));
}


$sth->execute();

$books = $sth->fetchAll(PDO::FETCH_ASSOC);
