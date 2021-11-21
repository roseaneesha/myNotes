<?php

 include 'db.php';
 
 try{
    $id = $_GET['regNumber'];
    $sqlQuery = "DELETE FROM users WHERE regNumber=$id ";
    if( mysqli_query($db, $sqlQuery)){
        
        
           header("location: location.php");
    }

 }catch(mysqli_sql_exception $e){
     echo $e;
 }
?>