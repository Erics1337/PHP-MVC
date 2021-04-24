<?php
    $_SESSION['user_logged_in'] = false;
    $_SESSION['username'] = NULL;

    header('Location: index.php?action=login');
    
?>