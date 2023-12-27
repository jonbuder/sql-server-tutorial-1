<?php

function showPeople() {
    require "db.php";
    $sql = "SELECT ID, FirstName, LastName, FavoriteColor FROM people";
    $stmt = sqlsrv_query($conn, $sql);
    while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo '#' . $row['ID'] . ' - ' . $row['FirstName'] . ' ' . $row['LastName'] . ' - ' . $row['FavoriteColor'] . '<br>';
    }
}

?>