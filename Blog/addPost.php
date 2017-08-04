<?php
include_once 'dbConnection.php';
include_once 'dbQueries.php';

// Add Post
if (isset($_POST['submit'])) {
    $sth = $dbh->prepare(SQL_ADD_TO_DB);
    $sth->execute([$_POST['addPostTitle'], $_POST['addPostText']]);

}



