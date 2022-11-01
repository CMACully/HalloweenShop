<?php
    include "model/dbinfo.php";
    $id = filter_input(INPUT_GET, 'id');
    $prod = getSpoopyItems($id);
    print_r($prod); 
?>
<h1>Add Product</h1>
<form action="index.php" method="post">
    <input type="text" name='item'>
    <input type="text" name='itemPrice'>
    <input type="text" name='itemDesc'>
    <input type="text" name='itemImg'>
    <input type="hidden" name='addItem' value='TRUE'>
    <input type="submit" value="Add Item">
</form>