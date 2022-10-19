<?php
    include "Model/dbinfo.php";
    $goodies = getSpoopyItems();
    foreach($goodies as $goodie)
    {
        $strgoodie = "${goodie[1]}";
        echo($strgoodie);
    }
?>