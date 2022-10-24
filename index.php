<?php 
session_set_cookie_params(strtotime('+1 years'), '/');
session_start();
$logout = filter_input(INPUT_GET, 'lo');

if($logout){
    $_SESSION = [];
        
    // Generate a new session ID
    session_regenerate_id(true);
        
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    include "Model/dbinfo.php";
    $goodies = getSpoopyItems();
    $action = filter_input(INPUT_POST, "submit");
    echo($action);
    include "view/cauldron.php";
    switch($action)
    {
        
        case "Cauldron":
            include "view/cauldron.php";
            break;
        case "Bonehilda":
            include "view/bonehilda.php";
            break;
        case "Ghost Cookie":
            include "view/ghostcookie.php";
            break;
        case "Witch Soup":
            include "view/witchsoup.php";
            break;
        case "Vampire Latte":
            include "view/vampirelatte.php";
            break;
        default:
            include "view/orderForm.php";
    }
    
    
?>