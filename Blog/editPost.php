<?php
include_once 'dbConnection.php';
include_once 'dbQueries.php';

// Edit Posts
if ($_POST['edit']) {

    $sth = $dbh->prepare(SQL_SELECT_FOR_EDIT);
    $sth->execute([$_POST['postId']]);
    $editPosts = $sth->fetchAll(PDO::FETCH_ASSOC);
    print '<style> .editPostArea {display: block !important; } </style>';

}

if ($_POST['save']) {
    $sth = $dbh->prepare(SQL_UPDATE_FOR_EDIT);
    $sth->execute([$_POST['addPostTitle'], $_POST['addPostText'], $_POST['postId']]);
}

