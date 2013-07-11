<head>

<style type="text/css">
#btn
{
	-webkit-border-radius:3;
	background-color:#2A612C;
	border: 1px solid rgb(178, 178, 178);
	-webkit-border-radius:6;
		
	-moz-border-radius: 6px;
		 border-radius: 6px;
	padding:10px;
	margin-left:20px;
	color:#FFF;
	text-shadow:#999;
	text-outline:#096;
	margin-top:70;
	
}
</style>
</head>
<h1 align=center>Payment GateWay</h1>
<div style="margin-left:300;margin-top:120;width:500;height:500;font-family:Calibri;">
<a style="margin-bottom:-10;color:#CCC;font-family:Calibri;font-size:20px;text-decoration:none">Billing  Details</a>
&nbsp;&nbsp;<a style="margin-bottom:-10;color:#CCC;font-family:Calibri;font-size:20px;opacity:20%;">Payment Details</a>
&nbsp;&nbsp;<a style="margin-bottom:-10;color:#666;font-family:Calibri;font-size:20px;opacity:20%;">Final Step</a>
<hr />
<div id="entry" style=";height:500;width:500;margin-top:40;margin-left:20;">
Payment Done
<br>
Your Product will be Shipped To you in 3-4 day
<br>

<?php
include("dbconnection.php");
$qry="SELECT *
  FROM bill
 ORDER
    BY Id DESC
 LIMIT 1";
$result=mysql_query($qry);
$row=mysql_fetch_row($result) ;
$qry1="SELECT *
  FROM till
 ORDER
    BY Id DESC
 LIMIT 1";
$result1=mysql_query($qry1);
$row1=mysql_fetch_row($result1) ;

?>




<div style="border:2 solid green;padding:3">
<h3 align=center>Bill Recipt</h3><br>
Name : <?php echo $row[0]; ?><br>
Phone :<?php echo $row[1]; ?><br>
Address:<?php echo $row[2]; ?> <br>
Pincode : <?php echo $row[3]; ?><br>
ProductName :<?php echo $row1[0]; ?><br>
TotalBill : RS : <?php echo $row1[1]; ?><br><br>

</div>
<br>
<p align="right"><button onclick="location.href='index.php'" id="btn" >Home </button></p>
<?php
echo $b;
?>
</div>
</div>