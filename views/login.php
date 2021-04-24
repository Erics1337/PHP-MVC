<?php include('views/navbar.php'); ?>
<br>
<h1>Log In</h1>
<?php if ($errorMsg) echo '<h3>' . $errorMsg . '</h3>'; ?>
<form action="index.php" method="POST">
    <input type="hidden" name="login" value="login">
    <label for="username">Username</label>
    <input type='text' id='username' name='username' required><br><br>
    <label for="password">Password</label>
    <input type='text' id='password' name='password' required><br><br>
    <input type="submit" value='LOGIN USER'>
</form>