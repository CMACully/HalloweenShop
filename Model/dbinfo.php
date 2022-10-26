<?php
   $dsn = "mysql:host=localhost;dbname=halloweenshop";
   $username = "root";
   $password = "";
   try 
   {
       $db = new PDO($dsn, $username, $password);
       //echo("connected");
   } 
    catch (PDOException $e)
    {
    //die(include "404.php");
    echo("Not connected"); 
   }

    function getSpoopyItems()
    {
        $myQuery = "select * FROM goodies order by item ASC;";
        global $db;
        $qry = $db->query($myQuery);       
        $goodies = $qry->fetchAll();
        return $goodies;
    }

    
?>