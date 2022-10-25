<form action="#" method="post">
    <input type="hidden" name="action" value="add">
    <label>Name:</label>
   
    <?php 
        foreach($goodies as $goodie)
        {
            echo("<input type='submit' value='${goodie[1]}' name='action'>");
           
        }
        
        
    ?>
</form>