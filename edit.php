<?php
    include "model/dbinfo.php";
    $id = filter_input(INPUT_GET, 'id');
    $prod = getSpoopyItem($id);
    print_r($prod); 
?>
<h1>Edit a Product</h1>
<form action="index.php" method="post">
    <input type="text" name='item' value=<?= $prod['Item']?>>
    <input type="text" name='itemPrice' value=<?= $prod['Itemprice']?>>

    <input type="hidden" name='iID' value=<?= $prod['ItemID']?>>
    <input type="submit" value="Save Changes">
</form>