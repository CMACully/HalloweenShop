<?php
    include "Model/dbinfo.php";
    include "view/orderForm.php";
    $goodies = getSpoopyItems();
    foreach($goodies as $goodie)
    {
        $strgoodie = "${goodie[1]}";
        echo($strgoodie);
    }
?>