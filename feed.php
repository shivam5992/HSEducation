<?php
include "header.php";
?>

<html>
<head>
    <title></title>
</head>

<body>
    <div id="c-w">
        <br>

        <h2>Feedback Form</h2><style>
		#q
        {
        width:900px;
        }
        #a
        {
        width:500px;
        }
        </style>

        <form action="contactreply.php" id="f22" name="f22">
            <div><br>
            <img height="142" src="images/your_feedback.jpg" width="142"></div><br>
            <br>

            <fieldset id="q">
                <table border="1">
                    <tr>
                        <th width="150">Rate of website</th>

                        <th width="150">Poor</th>

                        <th width="150">Average</th>

                        <th width="150">Good</th>

                        <th width="150">Very good</th>

                        <th width="150">Outstanding</th>
                    </tr>

                    <tr>
                        <td>Content</td>

                        <td><input name="Content" type="radio" value=""><br></td>

                        <td><input name="Content" type="radio" value=""><br></td>

                        <td><input name="Content" type="radio" value=""><br></td>

                        <td><input name="Content" type="radio" value=""><br></td>

                        <td><input name="Content" type="radio" value=""><br></td>
                    </tr>

                    <tr>
                        <td>Look &amp; Feel</td>

                        <td><input name="Look &amp; Feel" type="radio" value=""><br></td>

                        <td><input name="Look &amp; Feel" type="radio" value=""><br></td>

                        <td><input name="Look &amp; Feel" type="radio" value=""><br></td>

                        <td><input name="Look &amp; Feel" type="radio" value=""><br></td>

                        <td><input name="Look &amp; Feel" type="radio" value=""><br></td>
                    </tr>

                    <tr>
                        <td>Ease of use</td>

                        <td><input name="Ease of use" type="radio" value=""><br></td>

                        <td><input name="Ease of use" type="radio" value=""><br></td>

                        <td><input name="Ease of use" type="radio" value=""><br></td>

                        <td><input name="Ease of use" type="radio" value=""><br></td>

                        <td><input name="Ease of use" type="radio" value=""><br></td>
                    </tr>

                    <tr>
                        <td>Overall</td>

                        <td><input name="Overall" type="radio" value=""><br></td>

                        <td><input name="Overall" type="radio" value=""><br></td>

                        <td><input name="Overall" type="radio" value=""><br></td>

                        <td><input name="Overall" type="radio" value=""><br></td>

                        <td><input name="Overall" type="radio" value=""><br></td>
                    </tr>
                </table>
            </fieldset>
        </form><br>
<div align="center">
        <form>
            <fieldset id="a">
                <label for="">How can we improve our site:</label><br>
                <textarea cols="50" id="text" placeholder="" rows="5">
</textarea><br>
                What does your suggestion above mostly relate to?<br>
                <select name=" What does your suggestion above mostly relate to?">
                    <option value="Images">
                        Images
                    </option>

                    <option value="Navigation">
                        Navigation
                    </option>

                    <option value="Forum">
                        Forum
                    </option>

                    <option value="Link">
                        Link
                    </option>
                </select><br>
                <br>
                What was your goal in visiting our site?<br>
                <select name=" What was your goal in visiting our site?">
                    <option value="For a member of High School">
                        For a member of High School
                    </option>

                    <option value="Simply a visitor">
                        Simply a visitor
                    </option>
                </select><br>
                <br>
                Did you accomplish your goal?<br>
                <select name=" Did you accomplish your goal?">
                    <option value="Yes">
                        Yes
                    </option>

                    <option value="No">
                        No
                    </option>

                    <option value="May be">
                        May be
                    </option>
                </select><br>
                <br>
                <label for="">How would you describe your experience today?:</label><br>
                <textarea cols="50" id="text" placeholder="" rows="5">
</textarea><br>
            </fieldset><br>

            <div>
                <input type="submit" value="Submit"> <input type="reset" value="Reset">
            </div>
        </form></div><br>
        <?php
        include "footer.php";
        ?>
    </div>
</body>
</html>