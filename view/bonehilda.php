<?php
    $itemID = $goodies[0][0];
    $itemName = $goodies[0][1];
    $itemPrice = $goodies[0][2];
    $itemDescription = $goodies[0][3];
    $itemImg = $goodies[0][4];
    
?>

<form action="." method="post">
    <label>Item: <?php echo($itemName);?></label>
    <label>Price: $<?php echo($itemPrice);?></label>
    <label>Description: <?php echo($itemDescription);?></label>
    <?php echo("<img src='images/$itemImg' alt=''>")?>

    <label>Quantity:</label>
            <select name="itemqty">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select><br>
    <?php echo(" <input type='hidden' value='$itemID' name='id'>") ?>
    <input type="hidden" value="add" name="action">
    <input type="submit" value="Add Item">
</form>