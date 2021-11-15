<?php
   try{
       $db= mysqli_connect('localhost','root','','my_notes');
       echo "Connected";


   }catch(mysqli_sql_exception $e){
       echo $e;
       echo "Connection error";
   }
?>