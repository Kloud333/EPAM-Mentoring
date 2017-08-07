<?php

include_once 'dbConnection.php';
include_once 'dbQueries.php';

// Pagination And Posts

if ($_GET['go']) {
    $sth = $dbh->prepare(SQL_USER_POSTS_COUNT);
    $sth->execute([$_SESSION['user']]);
} else {
    $sth = $dbh->prepare(SQL_ALL_POSTS_COUNT);
    $sth->execute();
}

$postsArray = $sth->fetchAll();

$countOfPages = 4;
$postsCount = $postsArray[0][0];

$pages = ceil($postsCount / $countOfPages);
$page = empty($_GET['page']) ? 1 : ceil($_GET['page']);
$posts = ($page - 1) * $countOfPages;

if ($_GET['go']) {
    $sth = $dbh->prepare(SQL_SELECT_USER_LIMIT_POSTS);
    $sth->bindValue(':user', $_SESSION['user'], PDO::PARAM_INT);
    $sth->bindValue(':countOfPages', $countOfPages, PDO::PARAM_INT);
    $sth->bindValue(':posts', $posts, PDO::PARAM_INT);

} else {
    $sth = $dbh->prepare(SQL_SELECT_ALL_LIMIT_POSTS);
    $sth->bindValue(':countOfPages', $countOfPages, PDO::PARAM_INT);
    $sth->bindValue(':posts', $posts, PDO::PARAM_INT);
}

$sth->execute();
if ($_GET['go']) {
    $usersPostsArray = $sth->fetchAll(PDO::FETCH_ASSOC);
} else {
    $allPostsArray = $sth->fetchAll(PDO::FETCH_ASSOC);
}

