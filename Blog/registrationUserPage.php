<?php
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

<?php require_once 'header.php' ?>

<div class="wrapper registrationWrapper">
    <div class="registrationArea">
        <form class="registrationForm" method="post">
            <p class="registrationError"><?php print $error; ?></p>
            <div class="registrationLabels">
                <label for="registrationInput">Login</label>
                <label for="registrationInputEmail">E-mail</label>
                <label for="registrationPasswordInput">Password</label>
            </div>
            <div class="registrationInputs">
                <input id="registrationInput" class="registrationInput" type="text" name="registrationInput">
                <input id="registrationInputEmail" class="registrationInputEmail" type="text" name="registrationInputEmail">
                <input id="registrationPasswordInput" class="registrationPasswordInput" type="password" name="registrationPasswordInput">
            </div>
            <input class="registrationAcceptButton button" type="submit" name="registrationButton" value="Registration">
        </form>
    </div>
</div>

<?php require_once 'footer.php' ?>

</body>
</html>