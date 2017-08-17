<?php foreach ($articles as $post_item) { ?>
    <div class="post">
        <h3 class="postTitle"><?php print $post_item['title']; ?></h3>
        <p class="postData"><?php print $post_item['date']; ?></p>
        <p class="postText"><?php print $post_item['text']; ?></p>
    </div>
<?php } ?>