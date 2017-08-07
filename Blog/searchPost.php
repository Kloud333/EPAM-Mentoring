<?php
include_once 'dbConnection.php';
include_once 'dbQueries.php';

// Search Post

if ($_GET['searchInput']) {
    $sth = $dbh->prepare(SQL_SEARCH_IN_DB);
    $sth->bindValue(':title', '%' . $_GET['searchInput'] . '%');
}

$sth->execute();
$allPostsArray = $sth->fetchAll(PDO::FETCH_ASSOC);
