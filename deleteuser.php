<?php
include "header.php";
?>

<body>
<div id="c-wmain">
<br>
<h2>Contact US</h2>

<?php
include("dbconnection.php");
$user = $_GET["ss"];
mysql_query("delete from register where username='$user'");
echo mysql_error();
?>
<h2> User Deleted</h2><h3><a href=delete.php>GoBack</a></h3>
</div>
</body>
</html>
 <?php
include "footer.php";
?>           
            
