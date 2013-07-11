<?php 
include "header.php";
?>

<body>
<div id="c-wmain" >
<br><br><h3><a href="admin.php">View All Admin Rights</a></h3><br>
<br><br>
<h1>List Of Registred Users !!</h1>
<br>
<div align=center>
<table border=2 width=500 height=200 >
<th>S.no<th> Firstname <th> LastName <th> Age<th> Gender<th>Dob<th> MobileNo 

<tr>
<?php
$i=1;
$result = mysql_query("select * from register");
while($row = mysql_fetch_row($result))
{
?>
<td align=center><?php echo $i ?>
<td align=center> <?php echo $row[1] ?>
<td align=center> <?php echo $row[2]?>
<td align=center> <?php echo $row[3]?>
<td align=center> <?php echo $row[4] ?>
<td align=center> <?php echo $row[5]?>
<td align=center> <?php echo $row[6]?>
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
