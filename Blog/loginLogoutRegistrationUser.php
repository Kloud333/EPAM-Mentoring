<?php

include_once 'dbConnection.php';

session_start();

if (!isset($_SESSION['user'])) {
    $loginLogoutButton = '<a href="loginUserPage.php"><button class="loginButton">Login</button></a>';
    $registrationButton = '<a href="registrationUserPage.php"><button class="registrationButton">Registration</button></a>';

} else {
    $lockedUpUser = '<a class="lockedUpUser" href="userCabinet.php?go=userCabinet">' . ucfirst($_SESSION['user']) . '</a>';
}

if (isset($_POST['loginButton'])) {
    $sth = $dbh->prepare('SELECT * FROM users ');
    $sth->execute();

    $users = $sth->fetchAll(PDO::FETCH_ASSOC);

    function usersCheck($users) {
        foreach ($users as $user) {
            if ($_POST['loginInput'] == $user['username'] && $_POST['passwordInput'] == $user['password']) {
                return $user['username'];
            }
        }
    }

    $userName = usersCheck($users);
    if (isset($userName)) {
        $_SESSION['user'] = $userName;
        header('location:index.php');
    } else {
        $error = 'Wrong Login or Password! Try again!';
    }

}

if ($_GET['go']) {
    $loginLogoutButton = '<a href="?status=logout"><button class="loginButton">Log Out</button></a>';
}

if ($_GET['status']) {
    unset($_SESSION['user']);
    header('location:index.php');
}

if (isset($_POST['registrationButton'])) {
    if (($_POST['registrationInput']) || ($_POST['registrationInputEmail']) || ($_POST['registrationPasswordInput'])) {
        $sth = $dbh->prepare('INSERT INTO blog.users ( username, password, email) VALUES ( ?, ?, ? )');
        $sth->execute([$_POST['registrationInput'], $_POST['registrationPasswordInput'], $_POST['registrationInputEmail']]);
        header('location:index.php');
    } else {
        $error = 'Inputs are empty! ';
    }


}




