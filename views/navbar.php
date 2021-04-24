<div>
<h2><a href="index.php?action=home">HOME</a></h2>
<?php if($_SESSION['user_logged_in']){
        echo '<h2><a href="index.php?action=secret">SECRET</a></h2>';
        echo '<h2><a href="index.php?action=logout">LOGOUT</a></h2>';
    } else {
        echo '<h2><a href="index.php?action=create">CREATE NEW USER</a></h2>';
        echo '<h2><a href="index.php?action=login">LOGIN</a></h2>';
    }?>
</div>