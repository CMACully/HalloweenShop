<form action="." method="post">
    <input type="hidden" name="action" value="add">
    <label>Name:</label>
   
    <?php 
        foreach($goodies as $goodie)
        {
            echo(" <button><input type='submit' value='${goodie[1]}'></button>");
        }
        
    ?>
</form>