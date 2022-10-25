<?php
    $itemID = $goodies[1][0];
    $itemName = $goodies[1][1];
    $itemPrice = $goodies[1][2];
    $itemDescription = $goodies[1][3];
    $itemImg = $goodies[1][4];
    
?>

<form style="max-width:600px; margin: 0 auto; padding-top:25px;" action="." method="post">
    <div class='card' style='width: 450px; margin: 0 auto;'>
        <div class='card-body'>
            <?php echo("<img src='images/$itemImg' alt=''>")?>
            <p class='card-title'>Spoopy Item: <?php echo($itemName);?></p>
            <p class='card-text'>Price: $<?php echo($itemPrice);?></p>
            <p class='card-text'>Description: <?php echo($itemDescription);?></p>
            <label>Quantity:</label>
            <select name="itemqty">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select><br>
            <input type="hidden" value="<?phpecho($itemID);?>" name="id">
            <input type="hidden" value="add" name="action">
            <input type="submit" value="Add Item">
        </div>
    </div>
</form>
