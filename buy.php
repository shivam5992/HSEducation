<?php
include "header.php";
?>

<script language=javascript>
function typp()
{
	var t=document.getElementById("selectcat").value;
	if(t == "Books")
	{
		document.getElementById("Books").style.display='block';
		
	}
}
</script>

<body>
<div id="c-wmain">
<br>
<h2>Shop Books And Magzines Reaserch Papers</h2>
<br>

<form action="buy.php" >
<h3>Select category :</h3><br>
By Name :<select name="cat" size=1 onchange='typp()'  id="selectcat">
<option >Choose Category .. </option>        
<option>Books</option>
<option>Magzines</option>
</select>

<div id="Books" style=display:none;margin-left:0px;height:150px>
subject :
<select name="cat1" size=1 >
<option DISABLED>Choose Category .. </option>        
<option>CSE</option>
<option>IT</option>
<option>BIO</option>
<option>MATHS</option>
<option>ECE</option>
<option>PHYSICS</option>
</select>
</div>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=submit value=submit>
</form>
<br>

<?php
include("dbconnection.php");
$i=1;
if(isset($_GET["cat1"]))
{
$cat = $_GET["cat1"];
$myquery="select * from booklist where category='$cat'";
$result=mysql_query($myquery);
print mysql_error();
print "<table border=2 width=900 height=200 align=center class=mm>
<th>S.no<th>Subject<th>BookIMG <th>Bookname<th>Authorimg<th>AuthorImage <th>Price<th>Buy";

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
print "<img src=$row[2]$row[7] width=100 height=100>"; 
?>
</td>
<td align=center><?php print "$row[6]"; ?></td>
<td align=center>RS &nbsp;<?php print "$row[5]"; ?></td>

<td align=center>
<a href=basket.php?abcd=<?php echo $row[3]; ?>&uvw=<?php echo "$row[5]"; ?> >Add to Basket</a>
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
            
