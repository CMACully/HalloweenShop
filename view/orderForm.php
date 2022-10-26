<form action="#" method="post">
    <input type="hidden" name="action" value="add">
    <label style='display: flex; justify-content: center; font-size: larger;'>Please select a Spoopy Item:</label><br>
   
    <?php 
        foreach($goodies as $goodie)
        {
            echo("<input class='buttonColor d-grid gap-2 col-4 mx-auto' type='submit' value='${goodie[1]}' name='action'><br>");
           
        }
    ?>
    <br>
    <input class="buttonColor d-grid gap-2 col-4 mx-auto" type='submit' value='View Cart' name='action'>
</form>