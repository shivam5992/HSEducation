<?php
$a=$_GET['pay'];
$b=$_GET['pname'];
$c=$_GET['pmnumber'];
$d=$_GET['paddress'];
$e=$_GET['pincode'];
$f=$_GET['q'];
$g=$_GET['r'];echo $g;
include("dbconnection.php");
$qry="insert into bill(name,phone,addr,pincode) values('$b','$c','$d','$e')";
$result=mysql_query($qry);


if($a== 'Credit')
{
	include('credit.php');
}
else if($a == 'Debit')
{
	include('debit.php');
}
else
{
	include('internet.php');
}
?>