<?php include("top.html"); ?>

<?php
    #found the information sent from matches.php
    $name = $_GET["name"];

    #found and saved singles document
    $singles = file("singles.txt");
    
    #found the returning user in singles doc
    $returnedUser = array();
    foreach ($singles as $single) {
        $loopArray = explode(",", $single);
        if ($loopArray[0] == $name) {
            $returnedUser = $loopArray;
        }
    }

    #saved the returning user's information in separate variables using list function
    list($name, $gender, $age, $personalityType, $favoriteOS, $minSeekingAge, $maxSeekingAge) = $returnedUser;
?>
    <h2>Matches for <?=$name?><h2>
<?php
    #created four variables for each letter of the personality type
    $letterOne = $personalityType[0];
    $letterTwo = $personalityType[1];
    $letterThree = $personalityType[2];
    $letterFour = $personalityType[3];

    #loop for finding matches
    foreach ($singles as $single) {
        $loopArray = explode(",", $single);
        if ($loopArray[1] != $gender &&
            $loopArray[2] >= $minSeekingAge &&
            $loopArray[2] <= $maxSeekingAge &&
            $loopArray[4] == $favoriteOS &&
            ($loopArray[3][0] == $letterOne ||
             $loopArray[3][1] == $letterTwo ||
             $loopArray[3][2] == $letterThree ||
             $loopArray[3][3] == $letterFour)) {
                list($matchName, $matchGender, $matchAge, $matchPersonalityType, $matchFavoriteOS, $matchMinSeekingAge, $matchMaxSeekingAge) = $loopArray;
?>
            <div class = "match">
                <!--test if image has background to see where to place p tag-->
                <p class = "match">
                    <img class = "match" src = "user.jpg" alt = "user image" />
                    <?=$matchName?>
                </p>
                <ul class = "match">
                    <li>
                        <label><strong>gender:</strong></label><?=$matchGender?>
                    </li>
                    <li>
                        <label><strong>age:</strong></label><?=$matchAge?>
                    </li>
                    <li>
                        <label><strong>type:</strong></label><?=$matchPersonalityType?>
                    </li>
                    <li>
                        <label><strong>OS:</strong></label><?=$matchFavoriteOS?>
                    </li>
                </ul>
            </div>
            <br/>
<?php
        }
    }
?>
<?php include("bottom.html"); ?>