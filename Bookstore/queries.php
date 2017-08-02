<?php

// Function for create Select Queries
function sqlQueries($whatSearch) {
    if ($whatSearch == 'searchByName') {
        $sqlPart = ' WHERE b.name LIKE :name ';
    } elseif ($whatSearch == 'author') {
        $sqlPart = ' WHERE b.author = :author ';
    } elseif ($whatSearch == 'tag_name') {
        $sqlPart = ' WHERE t.name=:tag ';
    } elseif ($whatSearch == 'all') {
        $sqlPart = ' ';
    }

    return 'SELECT  b.name, b.price, b.author, GROUP_CONCAT(t.name SEPARATOR \', \') t_name FROM  book b  LEFT JOIN book_tag bt ON bt.book_id = b.id LEFT JOIN tag t ON t.id = bt.tag_id' . $sqlPart . 'GROUP BY b.id';
}

// Constants for Insert Queries
const SQL_INSERT_ITEMS = 'INSERT INTO book (name, author, price) VALUES (?, ?, ?)';
const SQL_ELEMENT_EXIST = 'SELECT EXISTS(SELECT name FROM tag WHERE name= ?)';
const SQL_INSERT_TAG_ITEM = 'INSERT INTO tag (name) VALUES (?)';
const SQL_INSERT_TAG_ID_AND_BOOK_ID = 'INSERT INTO book_tag (book_id, tag_id) VALUES((SELECT id FROM book WHERE name= ?),(SELECT id FROM tag WHERE name= ?))';