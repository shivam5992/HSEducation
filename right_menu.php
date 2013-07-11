<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style3.css" />
 
<div class="container">
        <ul class="ca-menu">
            <li>
                <a href="main_forum.php"><span class="ca-icon">H</span>

                <div class="ca-content">
                    <h2 class="ca-main">Forum</h2>

                    <h3 class="ca-sub">Ask A Query</h3>
                </div></a>
            </li>

            <li>
                <a href="facilities.php"><span class="ca-icon">I</span>

                <div class="ca-content">
                    <h2 class="ca-main">Facilities</h2>

                    <h3 class="ca-sub">Advanced use of technology</h3>
                </div></a>
            </li>

            <li>
                <a href="faculty.php"><span class="ca-icon">G</span>

                <div class="ca-content">
                    <h2 class="ca-main">Faculty</h2>

                    <h3 class="ca-sub">View the Faculty</h3>
                </div></a>
            </li>

            <li>
                <a href="programmes.php"><span class="ca-icon">H</span>

                <div class="ca-content">
                    <h2 class="ca-main">Programmes</h2>

                    <h3 class="ca-sub">All the programmes offered</h3>
                </div></a>
            </li>
        </ul>
    </div>


<h1>Courses Offered</h1>
<p><font color=black>MousOver On Images To Read More About The Courses Offered   </font></p>

<br><br>
<table class=pp1>
<tr>

<?php
include ('dbconnection.php');
$x=1;
for($x=1;$x<=3;$x++)
{
$qry=mysql_query("SELECT * from courses where course_id='$x' and status=1");
$i=mysql_fetch_array($qry);
	echo "<td><div class='view view-eighth'><img src='images/img/";
	echo $i[2];
	echo "'";
	echo "width=120 height=120>";
	echo "<div class='mask'><br><br><a href='";
	echo $i[1];
	echo "'";
	echo "class='info'>Read More</a></div></div></td>";
}
?>
</tr>
<tr>

<?php

$x1=4;
for($x1=4;$x1<=6;$x1++)
{
	$qry1=mysql_query("SELECT * from courses where course_id ='$x1' and status=1");
	$i1=mysql_fetch_array($qry1);
	echo "<td><div class='view view-eighth'><img src='images/img/";
	echo $i1[2];
	echo "'";
	echo "width=120 height=120>";
	echo "<div class='mask'><br><br><a href='";
	echo $i1[1];
	echo "'";
	echo "class='info'>Read More</a></div></div></td>";
}
?>
</tr>
</table>
<br><br>
