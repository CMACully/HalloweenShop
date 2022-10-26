<?php
    $itemID = $goodies[0][0];
    $itemName = $goodies[0][1];
    $itemPrice = $goodies[0][2];
    $itemDescription = $goodies[0][3];
    $itemImg = $goodies[0][4];
    
?>

<form style="max-width:600px; margin: 0 auto; padding-top:25px;" action="." method="post">
    <div class='card' style='width: 450px; margin: 0 auto;'>
        <div class='card-body'>
            <?php echo("<img src='images/$itemImg' alt='' class='d-grid mx-auto'>")?><br>
            <p class='card-title' style='display: flex; justify-content: center;'>Spoopy Item: <?php echo($itemName);?></p>
            <p class='card-text' style='display: flex; justify-content: center;'>Price: $<?php echo($itemPrice);?></p>
            <p class='card-text' style='display: flex; justify-content: center;'>Description: <?php echo($itemDescription);?></p>
            <label style='display: flex; justify-content: center;'>Quantity: &emsp;
                <select name="itemqty">
                    <?php for($i = 1; $i <= 10; $i++) : ?>
                    <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                    </option>
                    <?php endfor; ?>
                </select>
            </label><br>
            <?php echo(" <input type='hidden' value='$itemID' name='id'>") ?>
            <input type="hidden" value="add" name="action">
            <input type="submit" class="buttonColor d-grid gap-2 col-3 mx-auto" value="Add Item"><br>
            <button class="buttonColor d-grid gap-2 col-3 mx-auto"><a href="./index.php?action=default">Add Item</a></button>
        </div>
    </div>
</form>