<?php

namespace app\src\posts;


use function app\core\renderView;
use function app\core\renderFile;
use app\core;

/**
 * @return null|string
 */
function index($cabinet = null, $edit = null) {

    global $app;

    $link = isset($_GET['search']) ? '?search=' . $_GET['search'] . '&' : '?';

    /** @var \PDO $dbh */
    $dbh = $app['db'];

    if (!$cabinet) {
        if ($_GET['search']) {
            $sth = $dbh->prepare('SELECT COUNT(1) FROM blog_posts WHERE title LIKE :title');
            $sth->bindValue(':title', '%' . $_GET['search'] . '%');
            $sth->execute();
        } else {
            $sth = $dbh->prepare('SELECT COUNT(1) FROM blog_posts');
            $sth->execute();
        }
    } else {
        if ($_GET['search']) {
            $sth = $dbh->prepare('SELECT COUNT(1) FROM blog_posts WHERE user = :user AND title LIKE :title');
            $sth->bindValue(':title', '%' . $_GET['search'] . '%');
            $sth->bindValue(':user', $app['user']['username']);
            $sth->execute();
        } else {
            $sth = $dbh->prepare('SELECT COUNT(1) FROM blog_posts WHERE user = ?');
            $sth->execute([$app['user']['username']]);
        }
    }


    $postsArray = $sth->fetchAll();

    $countOfPages = 4;
    $postsCount = $postsArray[0][0];

    $pages = ceil($postsCount / $countOfPages);
    $page = is_null($_GET['page']) ? 1 : ceil($_GET['page']);
    $posts = ($page - 1) * $countOfPages;

    if (!$cabinet) {
        if ($_GET['search']) {
            $sth = $dbh->prepare('SELECT * FROM blog_posts WHERE title LIKE :title ORDER BY blog_posts.date DESC LIMIT :countOfPages OFFSET :posts');
            $sth->bindValue(':countOfPages', $countOfPages, \PDO::PARAM_INT);
            $sth->bindValue(':posts', $posts, \PDO::PARAM_INT);
            $sth->bindValue(':title', '%' . $_GET['search'] . '%');
        } else {
            $sth = $dbh->prepare('SELECT * FROM blog_posts ORDER BY blog_posts.date DESC LIMIT :countOfPages OFFSET :posts');
            $sth->bindValue(':countOfPages', $countOfPages, \PDO::PARAM_INT);
            $sth->bindValue(':posts', $posts, \PDO::PARAM_INT);
        }
    } else {
        if ($_GET['search']) {
            $sth = $dbh->prepare('SELECT * FROM blog_posts WHERE user = :user AND title LIKE :title ORDER BY blog_posts.date DESC LIMIT :countOfPages OFFSET :posts');
            $sth->bindValue(':countOfPages', $countOfPages, \PDO::PARAM_INT);
            $sth->bindValue(':posts', $posts, \PDO::PARAM_INT);
            $sth->bindValue(':title', '%' . $_GET['search'] . '%');
            $sth->bindValue(':user', $app['user']['username']);
        } else {
            $sth = $dbh->prepare('SELECT * FROM blog_posts  WHERE user = :user ORDER BY blog_posts.date DESC LIMIT :countOfPages OFFSET :posts');
            $sth->bindValue(':countOfPages', $countOfPages, \PDO::PARAM_INT);
            $sth->bindValue(':posts', $posts, \PDO::PARAM_INT);
            $sth->bindValue(':user', $app['user']['username']);
        }
    }

    $sth->execute();

    $result = $sth->fetchAll(\PDO::FETCH_ASSOC);


    return renderView(['default_template.php', 'posts/posts_list.php', 'posts/add_post.php'], ['articles' => $result, 'pages' => $pages, 'page' => $page, 'link' => $link, 'cabinet' => $cabinet]);
}

function postById($id) {
    global $app;

    /** @var \PDO $dbh */
    $dbh = $app['db'];

    $sth = $dbh->prepare('SELECT * FROM blog_posts WHERE id= ?');

    $sth->execute([$id]);

    $result = $sth->fetchAll(\PDO::FETCH_ASSOC);

    return renderView(['default_template.php', 'posts/post_by_id.php'], ['articles' => $result]);
}

function addPost() {
    global $app;

    /** @var \PDO $dbh */
    $dbh = $app['db'];
    $sth = $dbh->prepare('INSERT INTO blog_posts (title, text, user) VALUES (?, ?, ?)');
    $sth->execute([$_POST['addPostTitle'], $_POST['addPostText'], $app['user']['username']]);
    //core\addFlash();
    core\redirect('main_page');
}

function deletePost() {
    global $app;

    /** @var \PDO $dbh */
    $dbh = $app['db'];
    $sth = $dbh->prepare('DELETE FROM blog_posts WHERE id = ?');
    $sth->execute([$_POST['postId']]);
    //core\addFlash();
    core\redirect('user_cabinet_page', ['cabinet' => 'cabinet']);
}

function editPost($num) {
    global $app;
    /** @var \PDO $dbh */
    $dbh = $app['db'];
    $sth = $dbh->prepare('SELECT * FROM blog_posts WHERE id = ?');
    $sth->execute([$num]);
    //core\addFlash();
    $editPosts = $sth->fetchAll(\PDO::FETCH_ASSOC);

    return renderView(['default_template.php', 'posts/edit_post.php'], ['editPosts' => $editPosts]);
}

function saveEdit() {
    global $app;

    /** @var \PDO $dbh */
    $dbh = $app['db'];
    $sth = $dbh->prepare('UPDATE blog_posts SET title = ?, text = ? WHERE id = ?');
    $sth->execute([$_POST['addPostTitle'], $_POST['addPostText'], $_POST['postId']]);
    //core\addFlash();
    core\redirect('user_cabinet_page', ['cabinet' => 'cabinet']);

}









