<?php include('views/navbar.php'); ?>
<br>
<h1>Create User</h1>
<?php if ($errorMsg) echo '<h3>' . $errorMsg . '</h3>'; ?>
<form action="index.php" method="POST">
    <input type="hidden" name="create" value="create">
    <label for="username">Username</label>
    <input type='text' id='username' name='username' required><br><br>
    <label for="password">Password</label>
    <input type='text' id='password' name='password' required><br><br>
    <input type="submit" value='CREATE NEW USER'>
</form>