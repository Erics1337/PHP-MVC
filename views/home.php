
<?php 
    include('navbar.php');
    // Read
    $select = "SELECT ID, username, password_hash
        FROM Users";
    $statement = $db->prepare($select);
    $statement->execute();
    $results = $statement->fetchAll();
    echo "<br><h1>Users</h1>
    <table>
    <tr>
        <th>ID</th>
        <th>username</th>
        <th>password_hash</th>
    </tr>";
    foreach ($results as $row) {
        echo "<tr>" .
            "<td>" . $row['ID'] . "</td>" .
            "<td>" . $row['username'] . "</td>" .
            "<td>" . $row['password_hash'] . "</td>" .
            "</tr>";
    }

    echo "</table>";
    $statement->closeCursor();
?>

