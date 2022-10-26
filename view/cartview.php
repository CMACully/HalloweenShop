<form style="max-width:600px; margin: 0 auto; padding-top:25px;">
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
            echo("<br>Item Quantity: " . $qty);
            echo("<br>Item Cost: $".$cost);
            echo("<br>Item Subtotal $".$total);
            echo(" <br><br>");
        }
        echo ("Items Subtotal: $" . getSubtotal());
    }
?><br><br>
    <div style="display: flex; justify-content: center;">
        <button class="d-grid mx-auto"><a class="atag" href="./index.php?action=default">Add Item</a></button>
        <button class="d-grid mx-auto"><a class="atag" href="./index.php?action=emptycart">Empty Cart</a></button>
        <button class="d-grid mx-auto"><a class="atag" href="./index.php?lo=y">Log Out</a></button>
    </div>
</form>
