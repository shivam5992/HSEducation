<link rel="stylesheet" type="text/css" href="css/style8.css" />

<div id="c-w">
<div id="ma">

<h1>About High School</h1>

<p>
<?php 
include("dbconnection.php");
$myquery="select * from hometext where htid=1 ";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result);
echo $row[1];
?>
</p>

<br>
<h1>Forum</h1>
<br>
<div style="background-color:gray;width=595px;height:470px;margin-left:2;border-radius:5px;-webkit-box-shadow: 7px 1px 5px rgba(0, 0, 0, 0.45);
-moz-box-shadow:    7px 1px 5px rgba(0, 0, 0, 0.45);
box-shadow:         7px 1px 5px rgba(0, 0, 0, 0.45);">

<table class="imagetable"><tr>
<th>S.no</th><th>Question</th><th>Likes</th><th>Department</th><th>Views</th>
</tr>

<?php
include("dbconnection.php");
for($i=1;$i<7;$i++)
{
$myquery="select * from question where q_id='$i' ";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result);
$qry="select department from dept where dept_id=$row[2]";
$result1=mysql_query($qry);
$row1=mysql_fetch_row($result1);
echo "<tr><td>";
echo $i;
echo "</td>";
echo "<td>";
echo $row[1];
echo "</td>";
echo "<td>";
echo $row[6];
echo "</td><td>";
echo $row1[0];
echo "</td><td>";
echo $row[4];
echo "</td></tr>"; 
}
?>
</table>

</div>

<p><font color=black>Please Login OR <a href=register.php><font color=blue>Register</font></a> &nbsp;<font color=black>To Ask A Query Or To View The Answers. </font>&nbsp;

</div>
<div id="sidebar">
<?php
include "right_menu.php";
?>
</div>
</div>
</body>

