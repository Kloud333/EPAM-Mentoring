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
            $query = $dbh->prepare('SELECT COUNT(1) FROM blog_posts WHERE title LIKE :title');
            $query->bindValue(':title', '%' . $_GET['search'] . '%');
            $query->execute();
        } else {
            $query = $dbh->prepare('SELECT COUNT(1) FROM blog_posts');
            $query->execute();
        }
    } else {
        if ($_GET['search']) {
            $query = $dbh->prepare('SELECT COUNT(1) FROM blog_posts WHERE user = :user AND title LIKE :title');
            $query->bindValue(':title', '%' . $_GET['search'] . '%');
            $query->bindValue(':user', $app['user']['username']);
            $query->execute();
        } else {
            $query = $dbh->prepare('SELECT COUNT(1) FROM blog_posts WHERE user = ?');
            $query->execute([$app['user']['username']]);
        }
    }


    $postsArray = $query->fetchAll();

    $countOfPages = 4;
    $postsCount = $postsArray[0][0];

    $pages = ceil($postsCount / $countOfPages);
    $page = is_null($_GET['page']) ? 1 : ceil($_GET['page']);
    $posts = ($page - 1) * $countOfPages;

    if (!$cabinet) {
        if ($_GET['search']) {
            $query = $dbh->prepare('SELECT * FROM blog_posts WHERE title LIKE :title ORDER BY blog_posts.date DESC LIMIT :countOfPages OFFSET :posts');
            $query->bindValue(':countOfPages', $countOfPages, \PDO::PARAM_INT);
            $query->bindValue(':posts', $posts, \PDO::PARAM_INT);
            $query->bindValue(':title', '%' . $_GET['search'] . '%');
        } else {
            $query = $dbh->prepare('SELECT * FROM blog_posts ORDER BY blog_posts.date DESC LIMIT :countOfPages OFFSET :posts');
            $query->bindValue(':countOfPages', $countOfPages, \PDO::PARAM_INT);
            $query->bindValue(':posts', $posts, \PDO::PARAM_INT);
        }
    } else {
        if ($_GET['search']) {
            $query = $dbh->prepare('SELECT * FROM blog_posts WHERE user = :user AND title LIKE :title ORDER BY blog_posts.date DESC LIMIT :countOfPages OFFSET :posts');
            $query->bindValue(':countOfPages', $countOfPages, \PDO::PARAM_INT);
            $query->bindValue(':posts', $posts, \PDO::PARAM_INT);
            $query->bindValue(':title', '%' . $_GET['search'] . '%');
            $query->bindValue(':user', $app['user']['username']);
        } else {
            $query = $dbh->prepare('SELECT * FROM blog_posts  WHERE user = :user ORDER BY blog_posts.date DESC LIMIT :countOfPages OFFSET :posts');
            $query->bindValue(':countOfPages', $countOfPages, \PDO::PARAM_INT);
            $query->bindValue(':posts', $posts, \PDO::PARAM_INT);
            $query->bindValue(':user', $app['user']['username']);
        }
    }

    $query->execute();

    $result = $query->fetchAll(\PDO::FETCH_ASSOC);


    return renderView(['default-template.php', 'posts/posts_list.php', 'posts/add_post.php'], ['articles' => $result, 'pages' => $pages, 'page' => $page, 'link' => $link, 'cabinet' => $cabinet]);
}

function postById($id) {
    global $app;

    /** @var \PDO $dbh */
    $dbh = $app['db'];

    $query = $dbh->prepare('SELECT * FROM blog_posts WHERE id= ?');

    $query->execute([$id]);

    $result = $query->fetchAll(\PDO::FETCH_ASSOC);

    return renderView(['default-template.php', 'posts/post_by_id.php'], ['articles' => $result]);
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
    $query = $dbh->prepare('DELETE FROM blog_posts WHERE id = ?');
    $query->execute([$_POST['postId']]);
    //core\addFlash('danger', 'Username or password are incorrect');
    core\redirect('userCabinetPage', ['cabinet' => 'cabinet']);
}

function editPost($num) {
    global $app;
    /** @var \PDO $dbh */
    $dbh = $app['db'];
    $sth = $dbh->prepare('SELECT * FROM blog_posts WHERE id = ?');
    $sth->execute([$num]);
    $editPosts = $sth->fetchAll(\PDO::FETCH_ASSOC);

    return renderView(['default-template.php', 'posts/edit_post.php'], ['editPosts' => $editPosts]);
}

function saveEdit() {
    global $app;

    /** @var \PDO $dbh */
    $dbh = $app['db'];
    $sth = $dbh->prepare('UPDATE blog_posts SET title = ?, text = ? WHERE id = ?');
    $sth->execute([$_POST['addPostTitle'], $_POST['addPostText'], $_POST['postId']]);
    //core\addFlash();
    core\redirect('userCabinetPage', ['cabinet' => 'cabinet']);

}









