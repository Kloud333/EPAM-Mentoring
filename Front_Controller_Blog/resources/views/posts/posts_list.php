<?php foreach ($articles as $post_item) { ?>
    <div class="post">
        <a href="<?= \app\core\createUrl('postById', ['id' => $post_item['id']]) ?>"><h3
                    class="postTitle"><?php print $post_item['title']; ?></h3></a>
        <p class="postData"><?php print $post_item['date']; ?></p>
        <p class="postText"><?php print $post_item['text']; ?></p>
        <?php if (isset($cabinet)) { ?>
            <a href="<?= \app\core\createUrl('edit_post_page', ['num' => $post_item['id']]) ?>">
                <button class="editButton button" type="submit" value="Edit">Edit</button>
            </a>
            <form class="postForm" method="post" action="<?= \app\core\createUrl('delete_post') ?>">
                <input type="hidden" name="postId" value="<? print $post_item['id'] ?>">
                <input class="deleteButton button" type="submit" name="delete" value="Delete">
            </form>
        <?php } ?>
    </div>
<?php } ?>

<div class="navigation">
    <?php if ($page != 1) { ?>
        <a href="<?= (!isset($cabinet) ? \app\core\createUrl('posts') : \app\core\createUrl('userCabinetPage', ['cabinet' => 'cabinet'])) . $link ?>page=1">First</a>
    <?php } ?>
    <?php for ($i = 0; $i < $pages; $i++) { ?>
        <a href="<?= (!isset($cabinet) ? \app\core\createUrl('posts') : \app\core\createUrl('userCabinetPage', ['cabinet' => 'cabinet'])) . $link . 'page=' . ($i + 1) ?>"><?php print ($i + 1) ?></a>
    <?php } ?>
    <?php if ($page != intval($pages)) { ?>
        <a href="<?= (!isset($cabinet) ? \app\core\createUrl('posts') : \app\core\createUrl('userCabinetPage', ['cabinet' => 'cabinet'])) . $link ?>page=<?php print intval($pages) ?>">Last</a>
    <?php } ?>
</div>

<?= $content ?>

