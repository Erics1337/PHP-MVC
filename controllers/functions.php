<?php
function selectCount($db, $username)
{
    $select = "SELECT COUNT(*) AS num
    FROM Users
    WHERE username = :username;";
    $statement = $db->prepare($select);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result['num'];
}


function insert($db, $username, $password_hash)
{
    $insert = "INSERT INTO Users
                            (username, password_hash)
                        VALUES
                            (:username, :password_hash)";
    $statement = $db->prepare($insert);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password_hash', $password_hash);
    $statement->execute();
    $statement->closeCursor();
}

function getHash($db, $username)
{
    $select = "SELECT password_hash
    FROM Users
    WHERE username = :username";
    $statement = $db->prepare($select);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result['password_hash'];
}
