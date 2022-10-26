<?php 

    function addItems($key, $qty) // adds a item to the cart pass in the item id and quantity
    {
        $num = 0;
        $goodies = getSpoopyItems();
        foreach($goodies as $goodie) // loop through till we have the postion in the array that the item is at
        {
        if($goodie[0] == $key){
                break;
        }
        else{
                $num = $num + 1;
        }
        
        }
        
        if($qty < 1) return;   

        if(isset($_SESSION['cart'][$key])) // if the cart has this item already it will update the quantity and subtotal
        {
            $qty += $_SESSION['cart'][$key]['qty'];
            updateItem($key, $qty);
            return;
        }
        //calaculate the cost and total
        $cost = $goodies[$num][2];
        $total = $cost * $qty;
        // put the item in the array with all its price info 
        $item = array(
            'itemid' => $goodies[$num][0],
            'cost' => $cost,
            'qty' => $qty,
            'total' => $total
            
        );
        $_SESSION['cart'][$key] = $item; // pass the array to the sesion with the key of the session to be the item id 
    }

    // updates the item
    function updateItem($key, $qty)
    {
        $qty = (int) $qty;
        if(isset($_SESSION['cart'][$key]))
        {
            if($qty <= 0){ // ussets the cart if the value is passed 0
                unset($_SESSION['cart'][$key]);
            }
            // modifys the data in the session array to the new data
            else{
                $_SESSION['cart'][$key]['qty'] = $qty;
                $total = $_SESSION['cart'][$key]['cost'] * $_SESSION['cart'][$key]['qty'];
                $_SESSION['cart'][$key]['total'] = $total;
            }

        }
    }

    function getSubtotal() {
        //gets the subtotal of each item and adds them all together to get the overall subtotal 
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['total'];
        }
        $subtotal_f = number_format($subtotal, 2);
        return $subtotal_f;
    }

?>