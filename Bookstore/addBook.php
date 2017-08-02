<?php

include_once 'queries.php';

if (isset($_POST['addBook'])) {

    //Add New Books Items - Book Name, Author Name, Book Price
    $sth = $dbh->prepare(SQL_INSERT_ITEMS);
    $sth->execute([$_POST['name'], $_POST['author'], $_POST['price']]);

    $tagsArray = explode(' ', $_POST['tag']);

    //Add Book Tags
    foreach ($tagsArray as $tag) {
        $sth = $dbh->prepare(SQL_ELEMENT_EXIST);
        $sth->execute([$tag]);
        $tagExist = $sth->fetch();

        //Add Book Tag if Not Exist
        if ($tagExist[0] == 0) {
            $sth = $dbh->prepare(SQL_INSERT_TAG_ITEM);
            $sth->execute([$tag]);
        }
        //Add Book_ID and Tag_ID
        $sth = $dbh->prepare(SQL_INSERT_TAG_ID_AND_BOOK_ID);
        $sth->execute([$_POST['name'], $tag]);

    }

    header('Location:index.php');

}

