<?php
    //print_r($_SESSION);
    
    if(empty($_SESSION['cart']) || $_SESSION['cart'] == 0){
        echo("<p>There are no items in the cart.</p>");

    }
?>

<p><a href="./index.php?action=default">Add Item</a></p>
<p><a href="./index.php?action=emptycart">Empty Cart</a></p>
<p><a href="./index.php?lo=y">Log Out</a></p>