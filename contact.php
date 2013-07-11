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

        <h2>Contact US</h2><br>

        <div style="margin-left:100px">
            <form action="contactreply.php" id="f" name="f">
                <table align="center">
                    <tr>
                        <td>Name*</td>

                        <td><input name="c1" required="" size="25" type="text"></td>
                    </tr>

                    <tr>
                        <td>Email*</td>

                        <td><input name="c2" required="" size="25" type="email"></td>
                    </tr>

                    <tr>
                        <td>Message*</td>

                        <td>
                        <textarea rows="10">
</textarea></td>
                    </tr>

                    <tr>
                        <td><input onclick="valid()" type="submit" value="submit"></td>

                        <td><input type="reset"></td>
                    </tr>
                </table><br>
                &lt;

                <table cellpadding="0" cellspacing="0">
                    <col width="213">
                    <col width="243">
                    <col width="216">

                    <tr>
                        <td height="38" width="213"><strong>NAME&nbsp;</strong></td>

                        <td width="243"><strong>DESIGNATION</strong></td>

                        <td width="216"><strong>CONTACT DETAILS</strong></td>
                    </tr>

                    <tr>
                        <td height="66">Prof. A. K. SINGH&nbsp;</td>

                        <td width="243">Vice Chancellor</td>

                        <td width="216">0111-65435643<br>
                        Mail:&nbsp;A.K.singh@highschool.ac.in</td>
                    </tr>

                    <tr>
                        <td height="100">SHIVAM BANSAL</td>

                        <td width="243">Director</td>

                        <td width="216">0111-43654855<br>
                        <br>
                        Mail:&nbsp;S.bansal@highschool.ac.in</td>
                    </tr>

                    <tr>
                        <td height="82">YOGESH VIJAY &nbsp;</td>

                        <td width="243">Dean</td>

                        <td width="216">0111-245648975<br>
                        Ext (O)-160<br>
                        Mail:&nbsp;yogeshvijay@highschool.ac.in</td>
                    </tr>

                    <tr>
                        <td height="38"><strong>NAME&nbsp;</strong></td>

                        <td><strong>DESIGNATION</strong></td>

                        <td><strong>CONTACT DETAILS</strong></td>
                    </tr>

                    <tr>
                        <td height="82">SHUBHAM&nbsp;&nbsp;JAIN</td>

                        <td width="243">HoD - CSE/IT</td>

                        <td width="216">0111-245648975<br>
                        Mail:&nbsp;shubham.jain@highschool.ac.in</td>
                    </tr>

                    <tr>
                        <td height="57">MAYANK&nbsp; BHOLA</td>

                        <td width="243">HoD - Physics&nbsp;&amp; Material Science</td>

                        <td width="216">0111-245648975<br>
                        Mail:&nbsp;mayankbhola@highschool.ac.in</td>
                    </tr>

                    <tr>
                        <td height="62">VARUN&nbsp;SINGH</td>

                        <td width="243">HoD - Mathematics</td>

                        <td width="216">0111-245648975<br>
                        Mail:varun.singh@highschool.ac.in</td>
                    </tr>

                    <tr>
                        <td height="84"><strong>IMPORTANT CONTACT&nbsp;</strong></td>

                        <td width="243">&nbsp;</td>

                        <td width="216">&nbsp;</td>
                    </tr>

                    <tr>
                        <td height="46"><strong>EPBAX&nbsp;</strong></td>

                        <td width="243">0111-56438565</td>

                        <td width="216">&nbsp;</td>
                    </tr>

                    <tr>
                        <td height="56"><strong>FAX</strong></td>

                        <td width="243">Help Line - 6325325, CAM - 232858235 &amp; T&amp;P Cell - 353275325</td>

                        <td width="216">&nbsp;</td>
                    </tr>
                </table><br>
                <br>
            </form>
        </div>
    </div><?php
    include "footer.php";
    ?>
</body>
</html>