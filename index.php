<!--
  Developer: Chandler Thompson & Chauntel Atchley Cully
  Project: Halloween Shop
  Date: 10/26/2022
-->
<?php 
    include "Model/dbinfo.php";
    include "Model/cartfunctions.php";
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
    
    $del = filter_input(INPUT_GET, 'del');
    if ($del)
    {
        // Delete Items
        //$qry = "delete from products where itemId = $del";
        $qry = "update goodies set active = 0 where itemID = $del";
        $myQuery = $db->query($qry);
        //echo($qry);
    }

    $addItem = filter_input(INPUT_POST, 'addItem');
    if ($addItem)
    {
        // Add Items
        $item = filter_input(INPUT_POST, 'item');
        $itemPrice = filter_input(INPUT_POST, 'itemPrice');
        $itemDesc = filter_input(INPUT_POST, 'itemDesc');
        $itemImg = filter_input(INPUT_POST, 'itemImg');
        $myQuery = "INSERT INTO `goodies` (`ItemID`, `Item`, `Itemprice`, `Itemdescription`, `Itemimg`) VALUES (NULL, '$item', $itemPrice, '$itemDesc', '$itemImg')";
        echo($myQuery);
        $qry = $db->query($myQuery);
    }

    $itemID = filter_input(INPUT_POST, 'iID');
    if ($itemID)
    {
        // Save changes
        $item = filter_input(INPUT_POST, 'item');
        $itemPrice = filter_input(INPUT_POST, 'itemPrice');
        $myQuery = "update goodies set Item = '$item', Itemprice = $itemPrice where itemID = $itemID";
        echo($myQuery);
        $qry = $db->query($myQuery);
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
    <a href='edit.php?id=1'>edit</a>
    <a href='add.php?'>add</a>
<form style="max-width:600px; margin: 0 auto; padding-top:25px;" action="." method="post">
    <div class='card' style='width: 450px; margin: 0 auto;'>
        <div class='card-body'>
        <?php
            $goodies = getSpoopyItems();
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
                case "Cauldron":
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
                case "View Cart":
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