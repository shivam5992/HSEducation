<head>
<script type="text/javascript">
function fun1()
{
	document.getElementById("entry").style.display='block';
}
</script>
<style type="text/css">
#cno,#cpas
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
#done
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
}
</style>
</head>
<h1 align=center>Payment GateWay</h1>
<div style="margin-left:300;margin-top:120;width:500;height:500;font-family:Calibri;">
<a style="margin-bottom:-10;color:#CCC;font-family:Calibri;font-size:20px;text-decoration:none">Billing  Details</a>
&nbsp;&nbsp;<a style="margin-bottom:-10;color:#666;font-family:Calibri;font-size:20px;opacity:20%;">Payment Details</a>
&nbsp;&nbsp;<a style="margin-bottom:-10;color:#CCC;font-family:Calibri;font-size:20px;opacity:20%;">Final Step</a>
<hr />
<h1>Select Bank</h1>
<input type="radio" name="bank" onClick="fun1()">SBI
<br>
<input type="radio" name="bank" onClick="fun1()">Canara
<br>
<input type="radio" name="bank" onClick="fun1()">ICICI
<br>
<input type="radio" name="bank" onClick="fun1()">Bank Of Baroda
<br>
<div id="entry" style="display:none;height:500;width:500;">
<form action="final.php" method="post">
<table width="392" height="98">
<tr>
<td width="139" height="51">Username</td>
<td width="241">
<input type="text" name="cno" id="cno" required="required" size="30"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="cpas" id="cpas" required="required" size="30"></td>
</tr>
</table>
<p align="right"> <input type="submit" value="D O N E" id="done"></p>
</form>

</div>
</div>