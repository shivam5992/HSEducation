<?php
include "header.php";
?>

<body>
<div id="c-wmain">
<br>
<h2>Hello You Have Selected following Products To purchase</h2>
<br>

<?php
include("dbconnection.php");
	$f=$_GET['abcd'];
	$g=$_GET['uvw'];
	$myquery="select * from booklist where filename='$f' ";
	$result=mysql_query($myquery);
	print mysql_error();
	print "<table border=2 width=900 height=200 align=center class=mm>
	<th>Book <th>Bookname<th>Author <th>AuthorName";

	while($row=mysql_fetch_row($result))
	{
	?>
	<tr>
	<td align=center>
	<?php 
	print "<img src=$row[2]$row[4] width=100 height=100>"; 
	?>
	</td>
	<td align=center><?php print "$row[3]"; ?></td>
	<td align=center>
	<?php 
	print "<img src=$row[2]$row[7] width=100 height=100>"; 
	?>
	</td>
	<td align=center><?php print "$row[6]"; ?></td>
	</tr>
	<?php
	$i++;
	}
	print "</table>";
	?>	
<h2>Make The Payment Now</h2><br><br>
<h2><a href="payment.php?abcd=<?php echo $f; ?>&uvw=<?php echo "$g"; ?>">Continue</a></h2>
</div>
</body>
<?php
include "footer.php";
?>           
            
