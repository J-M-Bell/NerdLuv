<?php include("top.html"); ?>

<!--form for viewing matches-->
<div>
    <form action = "matches-submit.php" method = "get">
        <fieldset>
            <legend>Returning User:</legend>
            <label><strong>Name:</strong></label>
            <input type = "text" name = "name" size = "16"/><br />
            <input type = "submit" value = "View My Matches" />
        </fielset>
    </form>
</div>
                
<?php include("bottom.html"); ?>
