<?php include("top.html"); ?>

<?php
    #save new user values in variable to be placed in singles.txt
    $newUserArray = $_POST;

    #create a string that has the values separated by commas
    $newUserString = implode(",", $newUserArray);

    #append that string to singles.txt
    file_put_contents("singles.txt","\n" . $newUserString, FILE_APPEND);
?>
        <div>
            <h2>Thank you!</h2>
            <p>Welcome to Nerdluv, <?=$newUserArray["name"]?>!<br/><br/>
                Now <a href = "matches.php">log in to see your matches!</a>
            </p>
        </div>
<?php include("bottom.html"); ?>
