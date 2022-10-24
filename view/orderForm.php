<form action="." method="post">
    <input type="hidden" name="action" value="add">
    <label>Name:</label>
    <select name="goodieskey">
    <?php 
        foreach($goodies as $goodie)
        {
            echo("<option value='${goodie[1]}'>${goodie[2]}</option>");
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