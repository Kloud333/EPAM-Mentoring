<?php
include_once 'dbConnection.php';
include_once 'dbQueries.php';

// Delete Post
if($_POST['delete']){
    $sth = $dbh->prepare(SQL_DELETE_FRO_DB);
    $sth->execute([$_POST['postId']]);
}