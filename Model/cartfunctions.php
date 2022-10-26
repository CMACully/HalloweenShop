<?php 

    function addItems($key, $qty)
    {
        $num = 0;
        $goodies = getSpoopyItems();
        foreach($goodies as $goodie)
        {
        if($goodie[0] == $key){
                break;
        }
        else{
                $num = $num + 1;
        }
        
        }
        global $products;
        
        if($qty < 1) return;

        if(isset($_SESSION['cart'][$key]))
        {
            $qty += $_SESSION['cart'][$key]['qty'];
            updateItem($key, $qty);
            return;
        }
        echo($num);
        $cost = $goodies[$num][2];
        $total = $cost * $qty;
        $item = array(
            'itemid' => $goodies[$num][0],
            'cost' => $cost,
            'qty' => $qty,
            'total' => $total
            
        );
        $_SESSION['cart'][$key] = $item;
    }

    function updateItem($key, $qty)
    {
        $qty = (int) $qty;
        if(isset($_SESSION['cart'][$key]))
        {
            if($qty <= 0){
                unset($_SESSION['cart'][$key]);
            }
            else{
                $_SESSION['cart'][$key]['qty'] = $qty;
                $total = $_SESSION['cart'][$key]['cost'] * $_SESSION['cart'][$key]['qty'];
                $_SESSION['cart'][$key]['total'] = $total;
            }

        }
    }

    function getSubtotal() {
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['total'];
        }
        $subtotal_f = number_format($subtotal, 2);
        return $subtotal_f;
    }

?>