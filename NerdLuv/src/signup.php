<?php include("top.html"); ?>

<!--form for signing up-->
<div>
    <form action = "signup-submit.php" method = "post">
        <fieldset>
            <legend>New User Signup:</legend>
            <label><strong>Name:</strong></label>
            <input type = "text" name = "name" size = "16"/><br />
            <label><strong>Gender:</strong></label>
            <label><input type = "radio" name = "gender" value = "male" />Male</label>
            <label><input type = "radio" name = "gender" value = "female" />Female</label><br />
            <label><strong>Age:</strong></label>
            <input type = "text" name = "age" size = "6" maxlength = "2"/><br />
            <label><strong>Personality Type:</strong></label>
            <input type= "text" name = "personalityType" size = "6" maxlength = "4"/>
            <a href = "https://www.humanmetrics.com/personality" >(Don't know your type?)</a><br />
            <label><strong>Favorite OS:</strong></label>
            <select name = "favoriteOS">
                <option>Windows</option>
                <option>Mac OS X</option>
                <option>Linux</option>
            </select><br />
            <label><strong>Seeking age:</strong></label>
            <input type = "text" name = "minSeekingAge" placeholder = "min" size = "6" maxlength = "2"/> to <input type = "text" name = "maxSeekingAge" placeholder = "max" size = "6" maxlength = "2"/><br />
            <input type = "submit" value = "Sign Up" />
        </fielset>
    </form>
</div>
                    
<?php include("bottom.html"); ?>

