<?php
include_once 'dbConnection.php';
include_once 'editPost.php';
include_once 'addPost.php';
include_once 'deletePost.php';
include_once 'posts.php';
include_once 'searchPost.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- Header -->
<header class="header clearfix">
    <a class="slogan" href="index.php"><h1>Blog Lite</h1></a>
    <form class="searchForm" name="searchForm" method="get">
        <input class="searchInput" name="searchInput" type="text">
        <input class="searchButton" name="searchSubmit" type="submit" value="Search">
    </form>
</header>
<!-- Wrapper -->
<div class="wrapper">
    <!-- Content -->
    <div class="content">
        <?php foreach ($postsArray as $post_item) { ?>
            <div class="post">
                <h3 class="postTitle"><?php print $post_item['title']; ?></h3>
                <p class="postData"><?php print $post_item['date']; ?></p>
                <p class="postText"><?php print $post_item['text']; ?></p>
                <form class="postForm" method="post">
                    <input type="hidden" name="postId" value="<? print $post_item['id'] ?>">
                    <input class="editButton button" type="submit" name="edit" value="Edit">
                    <input class="deleteButton button" type="submit" name="delete" value="Delete">
                </form>
            </div>
        <?php } ?>
    </div>
    <!-- Navigation In Content - Pagination -->
    <div class="navigation">
        <?php if ($page != 1) { ?>
            <a href="?page=1">First</a>
        <?php } ?>
        <?php for ($i = 0; $i < $pages; $i++) { ?>
            <a href="?<?= http_build_query(array_merge($_GET, ['page' => ($i + 1)])) ?>"><?= ($i + 1) ?></a>
        <?php } ?>
        <?php if ($page != intval($pages)) { ?>
            <a href="?page=<?= intval($pages) ?>">Last</a>
        <?php } ?>
    </div>
    <!-- Edit Post Area -->
    <div class="editPostArea">
        <form class="editPostForm" method="post">
            <input type="hidden" name="postId" value="<? print $editPosts[0]['id'] ?>">
            <input class="editPostTitle" name="addPostTitle" value="<? print $editPosts[0]['title'] ?>">
            <textarea class="editPostText" name="addPostText"
                      placeholder=""> <? print $editPosts[0]['text'] ?> </textarea>
            <input class="saveButton button" type="submit" name="save" value="Save">
            <input class="cancelButton button" type="submit" name="cancel" value="Cancel">
        </form>
    </div>
    <!-- Add Post Area -->
    <div class="addPostArea">
        <form class="addPostForm" method="post">
            <input class="addPostTitle" name="addPostTitle">
            <textarea class="addPostText" name="addPostText"></textarea>
            <input class="addButton button" type="submit" name="submit" value="Add Post">
        </form>
    </div>
</div>
<!-- Footer -->
<footer class="footer">Contact us</footer>

</body>
</html>