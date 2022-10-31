<?php
    include "model/dbinfo.php";
    $id = filter_input(INPUT_GET, 'id');
    $prod = getSpoopyItem($id);
    print_r($prod); 

?>
<h1>Edit a Product</h1>
<form action="index.php" method="post">
    <input type="text" name='Item' value=<?= $prod['Item']?>>
    <input type="text" name='IPrice' value=<?= $prod['Itemprice']?>>

    <input type="hidden" name='IID' value=<?= $prod['ItemID']?>>
    <input type="submit" value="Add Item">
</form>