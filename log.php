<?php
session_start();
$form_secret = isset($_POST["form_secret"])?$_POST["form_secret"]:'';
if(isset($_SESSION["FORM_SECRET"]))
{
    if(strcasecmp($form_secret, $_SESSION["FORM_SECRET"]) === 0) 
{	
	include('dbconnection.php');
	$a=$_POST['uname'];
	$b=$_POST['pass'];
	$c=$_POST['utype'];
	$qry=mysql_query("select * from register where username='$a' and password='$b' ") ;
	$n=@mysql_num_rows($qry);
if($n>=1)
{
	$_SESSION['u']=$a; 
	$_SESSION['v']=$b;
	$_SESSION['w']=$c;

if($a==="shivam" && $b==="qwerty")
{
include "admin.php" ;
}
else
{
	if($c==="Teacher")
	{
	include "teacher_guest.php";
	}
	else
	{
	include "guest.php";
	}
}
}
else
{
include 'invalid.php';
}
unset($_SESSION["FORM_SECRET"]);
}
else
{
include "index.php" ;
}
}
else
{	
include "index.php" ;	
}
?>