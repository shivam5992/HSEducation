<?php
include "header.php";
?>

<body>

<div id="c-wmain">
<br>
<h2>Downloads</h2>
<br>

<form action="download.php" >

<h3>Select category :</h3><br>
By Name :
<select name="cat" size=1 >
<option DISABLED>Choose Category Of Arts... </option>        
<option> Ebooks</option>
<option>Papers</option>
<option>StudyMaterial</option>
</select>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=submit value=submit>

</form>

<br>

<?php
include("dbconnection.php");

$i=1;
if(isset($_GET["cat"]))
{
$cat = $_GET["cat"];
$myquery="select * from downloads where category='$cat'";
$result=mysql_query($myquery);
print mysql_error();
print "<table border=2 width=500 height=200 align=center class=mm>
<th>S.no<th>Category <th>File <th>Filename<th>Download";
while($row=mysql_fetch_row($result))
{
?>
<tr>
<td align=center><?php print "$i "; ?></td> 
<td align=center><?php print "$row[1]"; ?></td>
<td align=center>
<?php 
print "<img src=$row[2]$row[4] width=100 height=100>"; 
?>
</td>
<td align=center><?php print "$row[3]"; ?></td>
<td align=center>
<?php 
print "<a href=$row[2]$row[3]>Download</a>";
?>
</td>
</tr>
<?php
$i++;
}
print "</table>";
}
?>
</div>
</body>


            
 <?php
include "footer.php";
?>           
            
