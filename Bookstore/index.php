<?php
include_once 'searchBook.php';
include_once 'addBook.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>

<h1>Bookstore</h1>

<!-- Form for Adding Books -->
<form class="addForm" method="post">
    <input type="text" name="name" placeholder="Book name">
    <input type="text" name="author" placeholder="Author name">
    <input type="text" name="price" placeholder="Book price">
    <input type="text" name="tag" placeholder="Book Tag">
    <input type="submit" name="addBook" value="Add Book">
</form>

<!-- Form for Search Books -->
<form class="searchForm" method="get">
    <input type="text" name="searchByName">
    <input type="submit" name="submit" value="Search">
</form>

<!-- Table for Books -->
<table>
    <?php foreach ($books as $book) { ?>
        <tr>
            <td class="infoColumn">
                <h3 class="bookName"><?php print $book['name']; ?></h3>
                <a class="author" href="?author=<?php print $book['author']; ?>"><?php print $book['author']; ?></a>
                <p>Tags:</p>
                <?php $tagArray = explode(', ', $book['t_name']); ?>
                <?php foreach ($tagArray as $tname) { ?>
                    <a class="bookTag" href="?tag_name=<?php print $tname; ?>"><?php print $tname; ?></a>
                <?php } ?>
            </td>
            <td class="priceColumn">
                <p class="price"><?php print sprintf('%d.00', $book['price']); ?></p>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>