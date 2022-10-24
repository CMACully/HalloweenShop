<?php
    $itemName = $goodies[1][1];
    $itemPrice = $goodies[1][2];
    $itemDescription = $goodies[1][3];
    $itemImg = $goodies[1][4];
    
?>

<form action="." method="post">
    <label>Item: <?php echo($itemName);?></label>
    <label>Price: $<?php echo($itemPrice);?></label>
    <label>Description: <?php echo($itemDescription);?></label>
    <?php echo("<img src='images/$itemImg' alt=''>")?>
    
</form>
