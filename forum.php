<html>
<head>

<script type="text/javascript"> 

</script>
<style type="text/css">

#ptag
{
margin-bottom:2;	
}
</style>
</head>
<?php
$i=0;
	include('dbconnection.php');
	$q=$_GET["q"];

	$a=mysql_query("SELECT dept_id FROM dept WHERE department='$q'"); 
	$b=mysql_fetch_row($a);

	$qry=mysql_query("SELECT * FROM question WHERE dept_id='$b[0]'");
	while($row = mysql_fetch_array($qry))
	{	$i=$i+1;
		echo "<br>";
		echo "<br>";
	?>
    	<div onClick="document.getElementById('<?php echo $i; ?>').style.display='block'" onDblClick="document.getElementById('<?php echo $i; ?>').style.display='none'" style="font-family:Calibri;font-size:24px;text-align:left;margin-left:60;color:#000;-webkit-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	   -moz-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	        box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	-webkit-box-shadow: 5px;
	-moz-border-radius: 5px;
		 border-radius: 5px;margin-right:50;height:60;">
      
			
			<p id=ptag><br>
		<?php
        echo " Q";
		
		echo $i;
		echo ":&nbsp;&nbsp;";
		
		echo $row[1];
		
		echo "&nbsp;";
		echo "</div>";
		echo "<p style='text-align:right;margin-right:50;'>";
		echo $row[4];
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";		
		?>
        <a href="javascript:void(0)" onClick="<?php 
	$j=$row[6];
	$k=$j+1;
	mysql_query("UPDATE question SET likes='$k' WHERE q_id='$row[0]'");
?>"><img src="images/like.jpg" width="26" height="18" style="margin-top:3;-webkit-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	   -moz-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	        box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	-webkit-box-shadow: 5px;
	-moz-border-radius: 5px;
		 border-radius: 5px;"></a>
<?php echo $row[6]; ?>
        </p>
        
        </p>
		
		
		<?php
		
		$sql1="SELECT * FROM answer WHERE q_id=$row[0] ";
		$result1= mysql_query($sql1);
		?>
		<div id="<?php echo $i; ?>" style="display:none;margin-left:80;text-align:left;color:#009;font-family:Calibri;margin-right:50;">
		<?php
        while($row1 = mysql_fetch_row($result1))
		{
			
			echo "<br>";
			echo "<font size='+2'>";
			echo "Ans:&nbsp;&nbsp;";
			echo $row1[2];
			echo "<br>";
			echo "</font>";
			echo "<p style='margin-right=50;font-size=20px;' align='right'>";
			echo $row1[4];			
			echo "</p>";
		}
		?>
		</div>
        <?php
		
	}
	?>
	
	

</html>