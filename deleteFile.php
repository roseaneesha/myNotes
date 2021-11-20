<?php

 include 'db.php';
 
 try{
    $id = $_GET['id'];
    $sqlQuery = "DELETE FROM subject_uploads WHERE id=$id ";
    if( mysqli_query($db, $sqlQuery)){
        if(!$_SESSION['loggedIn']){
            header("location: dashboard.php");
             
        }
        else 
           header("location: home.php");
    }

 }catch(mysqli_sql_exception $e){
     echo $e;
 }
?>