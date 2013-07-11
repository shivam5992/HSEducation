<?php
include "new3.php";
?>

<html>
<head>
<link rel="stylesheet" href="images/Colourise.css" type="text/css" />
</head>
<body>
<div id="c-wmain">
<br>
<br>
<h3><b>Search results :</b></h3><br>


<?php
$name=$_POST['b1'];
$cat=$_POST['cat'];



include("dbconnectdb2.php");
if($cat === "Downloads")
{
$sql="select * from downloads where filename LIKE '%".$name."%' ";
$result=mysql_query($sql);
?>

<table border=2 width=900 height=200 align=center class=mm>
<th>Id<th>Filename<th>IMG
<?php
$i=0;
while($row=mysql_fetch_row($result))
{
?>

<tr>
<td align=center><?php print "$row[0] "; ?></td> 
<td align=center><?php print "$row[3]"; ?></td>
<td align=center>
<img src=<?php print "$row[2]$row[4]"; ?> width=100 height=100>
</td>
</tr>

<?php
$i++;
if($i == 8)
{
break;
}
}
}
else 
{
$sql="select * from booklist where filename LIKE '%".$name."%' ";
$result=mysql_query($sql);
?>
</table>
<table border=2 width=900 height=200 align=center class=mm>
<th>BookId<th>Bookname<th>BookIMG
<?php
$i=0;
while($row=mysql_fetch_row($result))
{
?>
<tr>
<td align=center><?php print "$row[0] "; ?></td> 
<td align=center><?php print "$row[3]"; ?></td>
<td align=center>
<?php 
print "<img src=$row[2]/$row[4] width=100 height=100>"; 
?>
</td>
</tr>

<?php
$i++;
if($i == 8)
{
break;
}
}
}
?>
</table>


</div>
</body>
</html>
 <?php
include "newfoot.php";
?>           
            