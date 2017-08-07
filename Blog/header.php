<?php
include_once 'loginLogoutRegistrationUser.php';

?>


<header class="header clearfix">
    <a class="slogan" href="index.php"><h1>Blog Lite</h1></a>
    <?php print $lockedUpUser;?>

    <form class="searchForm" name="searchForm" method="get">
        <input class="searchInput" name="searchInput" type="text">
        <input class="searchButton" name="searchSubmit" type="submit" value="Search">
    </form>
        <?php print $loginLogoutButton; ?>
    <a href="#">
        <?php print $registrationButton; ?>
    </a>


</header>
