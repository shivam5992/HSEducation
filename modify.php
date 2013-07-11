<?php
include "header.php";
?>

<body>
<div id="c-wmain">
<br><br>
<h3><a href="admin.php">View All Admin Rights</a></h3><br>
<h1>Modify User Details !!</h1>
<br>
<table  align=center border=2  width=500 height=200>
<tr><th>S.NO</th><th>username</th><th>password</th><th>modify</th></tr>
<tr>
<?php
$i=1;
$result=mysql_query("select * from register");
while($row=mysql_fetch_row($result))
{
?>
<td align=center><?php echo $i ?>
<td align=center><?php echo $row[1]?></td>
<td align=center><?php echo $row[2]?></td>
<td align=center><a href=modifyuser.php?x=<?php echo $row[1]?> >modify</a></td>
<tr>
<?php
$i++;
}
?>
</table>
</div>
</body>
      
 <?php
include "footer.php";
?>           
            










