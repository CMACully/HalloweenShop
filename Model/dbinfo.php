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

    function addItems($key, $qty)
    {
        $goodies = getSpoopyItems();
        $num = 0;
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
        
        $cost = $goodies[$num][2];
        $total = $cost * $qty;
        $item = array(
            'itemid' => $goodies[$num][0],
            'cost' => $cost,
            'qty' => ($qty/10),
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