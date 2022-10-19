<?php
function getSpoopyItems(){
   $dsn = "mysql:host=localhost;dbname=halloweenshop";
   $username = "root";
   $password = "";
   try {
       $db = new PDO($dsn, $username, $password);
       //echo("connected");
   } catch (PDOException $e){
       //die(include "404.php");
       echo("Not connected");
        
   }

   $myQuery = "Select * from goodies";
   global $db;
   $qry = $db->query($myQuery);       
   $goodies = $qry->fetchAll();
   return $goodies;
}
?>