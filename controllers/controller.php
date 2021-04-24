<?php
include('controllers/functions.php');
global $errorMsg;

// Create
if ($_POST['create']) {

    $username = $_POST['username'] ?? NULL;
    $password = $_POST['password'] ?? NULL;

    $userCount = selectCount($db, $username);

    if ($userCount > 0) {                                          // If no result
        $errorMsg = 'That Username Already Exists!';
        include("views/create.php");
    } else {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        insert($db, $username, $password_hash);

        header('Location: index.php?action=login');
    }
} else if ($_POST['login']) {
    $username = $_POST['username'] ?? NULL;
    $password = $_POST['password'] ?? NULL;

    $userCount = selectCount($db, $username);

    if ($userCount == 0) {                                          // If no result
        $errorMsg = 'That Username Does Not Exist!';
        include('views/login.php');
    } else {

        $password_hash = getHash($db, $username);

        if (password_verify($password, $password_hash)) { // If password match

            $_SESSION['user_logged_in'] = true;
            $_SESSION['username'] = $username;

            include('views/home.php');
        } else {
            $errorMsg = 'Incorrect Password';
            include('views/login.php');
        }
    }
} else {

    $action = $_GET['action'] ?? NULL;
    switch ($action) {
        case 'login':
            $page = $_SESSION['user_logged_in'] ? 'home' : 'login';
            break;
        case 'logout':
            $page = $_SESSION['user_logged_in'] ? 'logout' : 'login';
            break;
        case 'create':
            $page = $_SESSION['user_logged_in'] ? 'create' : 'create';
            break;
        case 'secret':
            $page = $_SESSION['user_logged_in'] ? 'secret' : 'home';
            break;
        default:
            $page = $_SESSION['user_logged_in'] ? 'home' : 'home';
    }
    include("views/" . $page . ".php");
}
