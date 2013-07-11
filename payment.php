




<head>
<script type="text/javascript">

</script>
<style type="text/css">

#pname,#pmnumber,#paddress,#pincode
{
	background-size:30px 30px; 
  background-position:left; 
  background-repeat:no-repeat; 
  
	border: 1px solid rgb(178, 178, 178);
	-webkit-border-radius:3;
		-webkit-box-shadow: 0pt 2px 5px black,	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	   -moz-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	        box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	-webkit-box-shadow: 3px;
	-moz-border-radius: 3px;
		 border-radius: 3px;
		height:25px;
	
		 font-family:Calibri;
		 padding-left: 20px;
}
#ok
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
	width:80;
}
</style>
</head>
<h1 align=center>Payment GateWay</h1>
<div style="margin-left:300;margin-top:120;width:500;height:500;font-family:Calibri;">
<a style="margin-bottom:-10;color:#666;font-family:Calibri;font-size:20px;text-decoration:none">Billing  Details</a>
&nbsp;&nbsp;<a style="margin-bottom:-10;color:#CCC;font-family:Calibri;font-size:20px;opacity:20%;">Payment Details</a>
&nbsp;&nbsp;<a style="margin-bottom:-10;color:#CCC;font-family:Calibri;font-size:20px;opacity:20%;">Final Step</a>
<hr />
<div style="margin-left:20px;">
<?php
$z=$_GET['abcd'];
$y=$_GET['uvw'];
include("dbconnection.php");
$qry="insert into till(price,name) values('$y','$z')";
$result=mysql_query($qry);

?>

<form action="payment1.php" method="get">
<table width="704" height="276">
<tr>
<td width="136">&nbsp; &nbsp;NAME</td>
<td width="556"><input type="text" id="pname" name="pname" class="" size="30" required="required"/></td>
</tr>
<tr>
<td> &nbsp;&nbsp;PHONE NO</td>
<td>+91 <input type="tel"  name="pmnumber" id="pmnumber" placeholder=" Mobile Number"  onKeyPress="validmob" size="25" maxlength=10 required="required"/>
            <label class="p1" id="l5"></label></td>
</tr>
<tr>
<td> &nbsp;&nbsp;ADDR </td>
<td><textarea cols="30" rows="4" name="paddress" id="paddress" placeholder="Full ddress" required="required"></textarea>
            <label class="p1" id="l7"></label></td>
</tr>
<tr>
            <td height="56"><label for="pincode">&nbsp;&nbsp; PINCODE</label></td>
            <td><input type="text" name="pincode" id="pincode" placeholder="Pincode" size="30"  maxlength=6 required="required"/>
            <label class="p1" id="l10"></label></td>
 	</tr>
            </table>
            <table width="713" height="73">
            <tr>
            <td>&nbsp;&nbsp;Choose Payment Method</td>
            </tr>
            
            <tr >
            <td width="188">  &nbsp;&nbsp;    <input name="pay" type="radio" value="Credit" checked="checked">&nbsp;
              Credit Card       &nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" value="Debit" name="pay">
              Debit Card       &nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" value="Internet" name= "pay">  Internet Banking  </td>
            
            </tr>
           
</table>
<br />
<p align="right">
  <input type="submit" value="Next" id="ok" /></p>
  
</form>
</div>
</div>


