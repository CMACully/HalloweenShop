<!--
  Developer: Chandler Thompson & Chauntel Atchley Cully
  Project: Halloween Shop
  Date: 10/26/2022
-->
<?php 
session_set_cookie_params(strtotime('+1 years'), '/');
session_start();
$logout = filter_input(INPUT_GET, 'lo');
if($logout){
    $_SESSION = [];
        
    // Generate a new session ID
    session_regenerate_id(true);
        
}
if(empty($_SESSION['cart'])){
    $_SESSION = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="view/styles.css">
    <title>Document</title>
</head>
<body class="bckgnd">
<form style="max-width:600px; margin: 0 auto; padding-top:25px;" action="." method="post">
    <div class='card' style='width: 450px; margin: 0 auto;'>
        <div class='card-body'>
        <?php
            
            include "Model/dbinfo.php";
            $goodies = getSpoopyItems();
            include "Model/cartfunctions.php";
            if($_POST != null){
                $action = $_POST["action"];
            }
            else{
                $action = "";
            }
            
            //include "view/cauldron.php";
            switch($action)
            {
                case "add":
                    $itemID = filter_input(INPUT_POST, "id");
                    $itemqty = filter_input(INPUT_POST, "itemqty");
                    addItems($itemID, $itemqty);
                    include "view/cartview.php";
                    break;
                case "Cauldron ":
                    include "view/cauldron.php";
                    break;
                case "Bonehilda":
                    include "view/bonehilda.php";
                    break;
                case "Ghost Cookie":
                    include "view/ghostcookie.php";
                    break;
                case "Witch Soup ":
                    include "view/witchsoup.php";
                    break;
                case "Vampire Latte ":
                    include "view/vampirelatte.php";
                    break;
                case "cart":
                    include "view/cartview.php";
                    break;
                case "emptycart":
                    unset($_SESSION['cart']);
                    include "view/orderForm.php";
                    break;
                case "Return":
                    include "view/orderForm.php";
                    break;
                default:
                    include "view/orderForm.php";

            } 
        ?>
        </div>
    </div>
</form>