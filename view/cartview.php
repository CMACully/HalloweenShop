<?php
    //print_r($_SESSION);
    
    if(empty($_SESSION['cart']) || $_SESSION['cart'] == 0){
        echo("<p>There are no items in the cart.</p>");

    }
    else{
        foreach( $_SESSION['cart'] as $key => $item)
        {
            $num = 0;
            foreach($goodies as $goodie)
            {
                if($goodie[0] == $item['itemid']){
                        break;
                }
                else{
                        $num = $num + 1;
                }
            }
            $itemname = $goodies[$num][1];
            $cost = number_format($item['cost'], 2);
            $total = number_format($item['total'], 2);
            $qty = $item['qty'];
            echo($itemname ."-");
            echo(" Item Quantity: " . $qty);
            echo(" Item Cost: $".$cost);
            echo(" Item Subtotal $".$total);
            echo(" <br>");
        }
        echo ("Items Subtotal: $" . getSubtotal());
    }
?>
<button><a href="./index.php?action=default">Add Item</a></button>
<button><a href="./index.php?action=emptycart">Empty Cart</a></button>
<button><a href="./index.php?lo=y">Log Out</a></button>
