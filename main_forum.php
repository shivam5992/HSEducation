<?php
include "header.php";
?>

   <script type="text/javascript">
	function show(str)
	{
		var x;
		if(str=="")
		{
			document.getElementById("p1").innerHTML="";
			return;
		}
		x=new XMLHttpRequest();
		x.onreadystatechange=function()
		{
			if(x.readyState==4 && x.status==200)
			{
				
				document.getElementById("p1").innerHTML=x.responseText;
			}
		}
		x.open("GET","forum.php?q="+str,true);
		x.send();
		
	}
	</script>

<body>
<div id="c-wmain12" align=center>
<br><h2>Forum</h2><br><br>
	<form action="forum.php" method="post">
   			<?php
                include('dbconnection.php');
                $qry1 = mysql_query("SELECT department FROM dept");
               	echo "<select id='dept' name='dept' style='width:215;-webkit-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
			    -moz-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	    	    box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
				-webkit-box-shadow: 5px;
				-moz-border-radius: 5px;
		 		border-radius: 5px;' onChange='show(this.value)'>";
                echo "<option value=''>--Select--</option>";
				while(($row=mysql_fetch_row($qry1))!=NULL)
                {
                echo "<option value='$row[0]'>$row[0]</option>";
                }
                echo "</select>";
             	?>
<div id="p1" style="font-family:Verdana, Geneva, sans-serif">
 Select the department above
</div>
</form>
</div>
</body>
</html>
 <?php
include "footer.php";
?>           
           