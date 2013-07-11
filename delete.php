<?php 
include "header.php";
?>
 
<html>
<head>
<link rel="stylesheet" href="images/Colourise.css" type="text/css" />
</head>

<body>
<div id="c-wmain" >
<br><br>
<h3><a href="admin.php">View All Admin Rights</a></h3><br>
<br><br>
<h1>List Of Registred Users !!</h1>
<br>
<div align=center>
<table border=2 width=500 height=200 >
<th>S.no<th> Firstname <th> LastName <th> Username<th> Delete 
<tr>
<?php
$i=1;
$result = mysql_query("select * from register");
while($row = mysql_fetch_row($result))
{
?>
<td align=center><?php echo $i ?>
<td align=center> <?php echo $row[1] ?> <td align=center> <?php echo $row[2]?>
<td align=center> <?php echo $row[13]?>
<td align=center> <a href=deleteuser.php?ss=<?php echo $row[13]?> >Delete</a>
<tr>
<?php
$i++;
}
?>
</table>
</div>
</div>
</body>
<?php include "footer.php";
?>
