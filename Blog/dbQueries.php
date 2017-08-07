<?php
include_once 'dbConnection.php';

// SQL QUERIES
const SQL_ALL_POSTS_COUNT = 'SELECT COUNT(1) FROM blog_posts';

const SQL_USER_POSTS_COUNT = 'SELECT COUNT(1) FROM blog_posts WHERE blog_posts.user = ? ';

const SQL_SELECT_ALL_LIMIT_POSTS = 'SELECT * FROM blog_posts ORDER BY blog_posts.date DESC LIMIT :countOfPages OFFSET :posts';

const SQL_SELECT_USER_LIMIT_POSTS = 'SELECT * FROM blog_posts WHERE blog_posts.user = :user ORDER BY blog_posts.date DESC LIMIT :countOfPages OFFSET :posts';

const SQL_SELECT_FOR_EDIT = 'SELECT * FROM blog_posts WHERE id = ?';

const SQL_UPDATE_FOR_EDIT = 'UPDATE blog_posts SET title = ?, text = ? WHERE id = ?';

const SQL_DELETE_FRO_DB = 'DELETE FROM blog_posts WHERE id = ?';

const SQL_SEARCH_IN_DB = 'SELECT * FROM blog_posts WHERE title LIKE :title';

const SQL_ADD_TO_DB = 'INSERT INTO blog_posts (title, text, user) VALUES (?, ?, ?)';