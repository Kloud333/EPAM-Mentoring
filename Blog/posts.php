<?php
include_once 'dbConnection.php';
include_once 'dbQueries.php';

// Pagination And Posts
$sth = $dbh->prepare(SQL_DB_TABLE_COUNT);
$sth->execute();
$postsArray = $sth->fetchAll();

$countOfPages = 4;
$postsCount = $postsArray[0][0];

$pages = ceil($postsCount / $countOfPages);
$page = empty($_GET['page']) ? 1 : ceil($_GET['page']);
$posts = ($page - 1) * $countOfPages;

$sth = $dbh->prepare(SQL_LIMIT);
$sth->bindValue(':countOfPages', $countOfPages, PDO::PARAM_INT);
$sth->bindValue(':posts', $posts, PDO::PARAM_INT);

$sth->execute();

$postsArray = $sth->fetchAll(PDO::FETCH_ASSOC);


