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

<div class="wrapper loginWrapper">
    <div class="loginArea">
        <form class="loginForm" method="post">
            <p class="loginError"><?php print $error; ?></p>
            <div class="loginLabels">
                <label for="loginInput">Login</label>
                <label for="passwordInput">Password</label>
            </div>
            <div class="loginInputs">
                <input id="loginInput" class="loginInput" type="text" name="loginInput">
                <input id="passwordInput" class="passwordInput" type="password" name="passwordInput">
            </div>
            <input class="loginAcceptButton button" type="submit" name="loginButton" value="Login">
        </form>
    </div>
</div>


<?php require_once 'footer.php' ?>

</body>
</html>