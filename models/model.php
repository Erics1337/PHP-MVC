<?php 

$dsn = 'mysql:host=localhost;dbname=cs_350';
$username = 'student';
$password = 'CS350';

try {
    global $db;
    $db = new PDO($dsn, $username, $password);
} catch(PDOException $e){
    $msg =  $e->getMessage();
    echo "<p>ERROR: $msg</p>";
}

?>