<?php
include "header_logout.php";
?>

<body>
<div id="c-wmain">
<br>

<?php
$file_realname=trim($_FILES['myfile']['name']);
$xx=trim($_FILES['imgfile']['name']);
$cat=$_POST["cat"];
$uploaddir=$cat."/";
if(move_uploaded_file($_FILES['myfile']['tmp_name'],$uploaddir.$file_realname))
{
print"<strong>$file_realname</strong>upload";
}
else
{
print"<strong>$file_realname</strong>did not upload!";
}

if(move_uploaded_file($_FILES['imgfile']['tmp_name'],$uploaddir.$xx))
{
print"<strong>$file_realname</strong>uploadeeeeeeeed";
}

include("dbconnection.php");
$qry="insert into downloads(category,uploadir,filename,d_image) values('$cat','$uploaddir','$file_realname','$xx')";
$result=mysql_query($qry,$dbc);
print mysql_error();
print "New product added";
?>

</div>
</body>
 <?php
include "footer.php";
?>           
            