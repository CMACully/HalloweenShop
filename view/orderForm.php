<form action="#" method="post">
    <input type="hidden" name="action" value="add">
    <label>Click on an item to view it:</label>
   
    <?php 
        foreach($goodies as $goodie)
        {
            echo("<input type='submit' value='${goodie[1]}' name='action'>");
           
        }
    ?>
    <br>
    <input type='submit' value='cart' name='action'>
</form>