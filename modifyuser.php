<?php
include "header.php";
?>

<body>
<div id="c-wmain">
<br><br>
<?php
$user=$_GET['x'];
$result=mysql_query("select * from register where username='$user' ");
$row=mysql_fetch_row($result);
?>
<h3><a href="admin.php">View All Admin Rights</a></h3><br>
<h1>Modify User Details !!</h1>
<br>
<form action=modifyuser2.php method=post>
<table>
<tr><td>Username :<td><input type=text name=m1 value=<?php echo $row[0]; ?> ></td></tr>
<tr><td>Password :<td><input type=text name=m2 value=<?php echo $row[1]; ?> ></td></tr>
<tr><td>City :<td><input type=text name=m3 value=<?php echo $row[2]; ?> ></td></tr>
<tr><td>Email :<td><input type=text name=m4 value=<?php echo $row[3]; ?> ></td></tr>
<tr><td>Gender :<td><input type=text name=m5 value=<?php echo $row[4]; ?> ></td></tr>
<tr><td><input type=submit><td><input type=reset value=reset>
</table>
</form>
</div>
</body>
</html>
<?php
include "footer.php";
?>           
            