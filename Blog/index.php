<?php
include_once 'showPosts.php';
include_once 'searchPost.php';
include_once 'loginLogoutRegistrationUser.php';
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
<?php require_once 'header.php' ?>
<!-- Wrapper -->
<div class="wrapper indexWrapper">
    <!-- Content -->
    <div class="content">
        <?php foreach ($allPostsArray as $post_item) { ?>
            <div class="post">
                <h3 class="postTitle"><?php print $post_item['title']; ?></h3>
                <p class="postData"><?php print $post_item['date']; ?></p>
                <p class="postText"><?php print $post_item['text']; ?></p>
            </div>
        <?php } ?>
    </div>
    <!-- Navigation In Content - Pagination -->
    <div class="navigation">
        <?php if ($page != 1) { ?>
            <a href="?page=1">First</a>
        <?php } ?>
        <?php for ($i = 0; $i < $pages; $i++) { ?>
            <a href="?<?php print http_build_query(array_merge($_GET, ['page' => ($i + 1)])) ?>"><?php print ($i + 1) ?></a>
        <?php } ?>
        <?php if ($page != intval($pages)) { ?>
            <a href="?page=<?php print intval($pages) ?>">Last</a>
        <?php } ?>
    </div>
</div>
<!-- Footer -->
<?php require_once 'footer.php' ?>

</body>
</html>