<?php 
    if(!(isset($_SESSION))){
        session_set_cookie_params(300, '/');
        session_start();
        $_SESSION['user_logged_in'] = $_SESSION['user_logged_in'] ?? false;
        $_SESSION['username'] = $_SESSION['username'] ?? NULL;
    }
?>