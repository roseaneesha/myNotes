<?php

include 'db.php';

try {
    $id = $_GET['id'];
    $sqlQuery = "DELETE FROM users WHERE regNumber='$id' ";
    if (mysqli_query($db, $sqlQuery)) {

        header("location: logout.php");
    }
} catch (mysqli_sql_exception $e) {
    echo $e;
}
