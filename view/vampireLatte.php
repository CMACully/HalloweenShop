<?php
    $itemName = $goodies[3][1];
    $itemPrice = $goodies[3][2];
    $itemDescription = $goodies[3][3];
    $itemImg = $goodies[3][4];
    
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
</form>