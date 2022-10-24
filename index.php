<?php
    include "Model/dbinfo.php";
    $goodies = getSpoopyItems();
    include "view/orderForm.php";
?>