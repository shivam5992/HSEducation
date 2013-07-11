<?php
include "header.php";
?>

<body>
<div id="c-wmain">
<br><br>
<?php
$user=$_POST['m1'];
$pass=$_POST['m2'];
$city=$_POST['m3'];
$email=$_POST['m4'];
$gender=$_POST['m5'];
$qry="update login set password='$pass',city='$city',email='$email',
gender='$gender' where username='$user' ";
$result=mysql_query($qry);
print mysql_error();
?>
<h2> User Modified</h2><h3><a href=modify.php>GoBack</a></h3>
</div>
</body>
</html>

<?php
include "footer.php";
?>           
            