<?php
    $itemName = $goodies[0][1];
    $itemPrice = $goodies[0][2];
    $itemDescription = $goodies[0][3];
    
?>

<form action="." method="post">
    <label>Item: <?php echo($itemName);?></label>
    <label>Price: $<?php echo($itemPrice);?></label>
    <label>Description: <?php echo($itemDescription);?></label>
</form>