<link rel=stylesheet href=css/table.css type=text/css>
<body>
<br>
<div >
<table  class=pp>


<?php
 include("dbconnection.php"); 
for($i=1;$i<5;$i++)
{
$myquery="select * from news where news_id='$i' ";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result);

?>
<tr id=a3>
<td id=a1><a href=art.php><img src="News/<?php echo $row[2]; ?> " width=101 height=75></a></td>
<td id=a2>
<a href=art.php><font color=#08BCFE face="Lucida Console" size=2>
<?php echo $row[3]; ?>

</font><br>
<font color=#EEEDF2 face="Lucida Console" size=2><?php echo $row[1]; ?></font></td></a>
</tr>



<?php
}
?>
</table>


</body>


</div>