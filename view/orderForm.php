<form action="." method="post">
    <input type="hidden" name="action" value="add">
    <label>Name:</label>
    <select name="productkey">
    <?php 
        foreach($goodies as $goodie)
        {
            $strgoodie = "${goodie[1]}, ${goodie[2]}";
            echo($strgoodie);
        }
    ?>
    </select><br>

    <label>Quantity:</label>
    <select name="itemqty">
    <?php for($i = 1; $i <= 10; $i++) : ?>
        <option value="<?php echo $i; ?>">
            <?php echo $i; ?>
        </option>
    <?php endfor; ?>
    </select><br>

    <label>&nbsp;</label>
    <input type="submit" value="Add Item">
</form>

<form action="." method="post">
            <input type="hidden" name="action" value="add">

            <label>Name:</label>
            <select name="productkey">
            <?php foreach($products as $key => $product) :
                $cost = number_format($product['cost'], 2);
                $name = $product['name'];
                $item = $name . ' ($' . $cost . ')';
            ?>
                <option value="<?php echo $key; ?>">
                    <?php echo $item; ?>
                </option>
            <?php endforeach; ?>
            </select><br>

            <label>Quantity:</label>
            <select name="itemqty">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Item">
        </form>